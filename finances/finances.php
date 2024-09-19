<?php
  include '../../db.inc';
  $finances->content .=
  "\t\t\t<h1>Finances</h1><p>Personal finance software I have created.</p>
  \t\t<form action=\""."index.php"."\" method=\"GET\">
  \t\t\t<label for=\"reporttype\">Choose a report type:</label>
  \t\t\t<select id=\"reporttype\" name=\"reporttype\">
  \t\t\t\t<option value=\"None\">[Choose report type]</option>
  \t\t\t\t<option value=\"Expenses\"";
  if($_GET["reporttype"]=="Expenses"){
    $finances->content .=
    " selected";
  }
  $finances->content .=
  ">Expenses</option>
  \t\t\t\t<option value=\"Income\"";
  if($_GET["reporttype"]=="Income"){
    $finances->content .=
    " selected";
  }
  $finances->content .=
  ">Income</option>
  \t\t\t</select>
  \t\t\t<div>Date format 'Y-m-d', e.g. 2023-01-18</div>
  \t\t\t<div>Start date:</div>
  \t\t\t<div><input type=\"text\" name=\"startDateKey\" class=\"widthauto\" value=\"".$_GET['startDateKey']."\"></div>
  \t\t\t<div>End date:</div>
  \t\t\t<div><input type=\"text\" name=\"endDateKey\" class=\"widthauto\" value=\"".$_GET['endDateKey']."\"></div>\n";
  if(($_GET["reporttype"]=="Expenses") || ($_GET["reporttype"]=="Income")){
    $finances->content .=
    "\t\t\t<div>Select categories:</div>
	\t\t\t<div>\n";
	if($_GET["reporttype"]=="Expenses"){
	  $sqlGetCategories = "SELECT * FROM DimCategory WHERE CategoryID IN (SELECT DISTINCT CategoryID FROM FactPurchasesXDimCategory) ORDER BY CategoryName ASC;";
	}
	if($_GET["reporttype"]=="Income"){
	  $sqlGetCategories = "SELECT * FROM DimCategory WHERE CategoryID IN (SELECT DISTINCT CategoryID FROM FactSalesXDimCategory) ORDER BY CategoryName ASC;";
	}	
	$resultCategories = sqlsrv_query($conn, $sqlGetCategories);
	if ($resultCategories == FALSE)
      die( print_r( sqlsrv_errors(), true));
    $rows = sqlsrv_has_rows($resultCategories);
    if ($rows === true) {
      while ($row = sqlsrv_fetch_array($resultCategories, SQLSRV_FETCH_ASSOC)) {
        $finances->content .=
        "\t\t\t\t\t<input type=\"checkbox\" name=\"category[]\" value=\"".$row['CategoryID']."\" ";
        if (in_array($row['CategoryID'], $_GET['category'] ?? [])) {
          $finances->content .=
          "checked";
        }
		$finances->content .=
        " />".$row['CategoryName']." \n";
	  }
    } else {
      $finances->content .=
      "0 categories";
    }
    $finances->content .=
    "\t\t\t\t</div>";
	sqlsrv_free_stmt($resultCategories);
  }
  $finances->content .=
  "\t\t\t<div><input name=\"submit\" type=\"submit\" value=\"Submit\" id=\"submit\"></div>
  \t\t</form>
  ";
  function validateDate($date, $format = 'Y-m-d'){
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) === $date;
  }
  if(isset($_GET["submit"]) && $_GET["reporttype"]=="Expenses"){
    $finances->content .=
    "\t\t<h1>Expenses</h1>\n";
    $sqlSumExpenses = "SELECT SUM(Total) sumExpenses FROM (SELECT Description, FullDateAlternateKey Date, CityName City, PaymentMethodName 'Payment method', SellerName Seller, TotalPurchases Total FROM (SELECT TotalPurchases, Description, dd.FullDateAlternateKey, dc.CityName, dpm.PaymentMethodName, ds.SellerName, dca.CategoryName FROM FactPurchases fp INNER JOIN DimCity dc ON fp.CityID=dc.CityID INNER JOIN DimPaymentMethod dpm ON fp.PaymentMethodID=dpm.PaymentMethodID INNER JOIN DimSeller ds ON fp.SellerID=ds.SellerID INNER JOIN FactPurchasesXDimCategory fpxdc ON fp.CityID=fpxdc.CityID AND fp.DayID=fpxdc.DayID AND fp.PaymentMethodID=fpxdc.PaymentMethodID AND fp.SellerID=fpxdc.SellerID AND fp.CategoryID=fpxdc.CategoryID AND fp.CategoryDeduplicate=fpxdc.CategoryDeduplicate INNER JOIN DimCategory dca ON fpxdc.CategoryID=dca.CategoryID INNER JOIN DimDay dd ON fp.DayID=dd.DayID";
    if(isset($_GET['category'])){
      $sqlSumExpenses .= " WHERE dca.CategoryID IN (".implode(', ', $_GET['category']).")";
    }
    $sqlSumExpenses .= " AND fp.CategoryDeduplicate = fpxdc.CategoryDeduplicate) purchases GROUP BY TotalPurchases, Description, FullDateAlternateKey, CityName, PaymentMethodName, SellerName) expenses";
    if (validateDate($_GET['startDateKey']) && validateDate($_GET['endDateKey'])) {
      $sqlSumExpenses .= " WHERE Date >= '".$_GET['startDateKey']."' AND Date <= '".$_GET['endDateKey']."';";
    }
	$sqlExpenses = "SELECT a.Description, a.Date, a.City, a.[Payment method], a.Seller, a.Total, (SELECT SUBSTRING((SELECT DISTINCT ', ' + CONVERT(VARCHAR(255),dca.CategoryName) FROM DimCategory dca WHERE dca.CategoryName = a.Category FOR XML PATH, TYPE).value('.[1]','NVARCHAR(MAX)'), 2, 2000)) AS Category, (SELECT SUBSTRING((SELECT DISTINCT ', ' + CONVERT(VARCHAR(255),pca.ParentCategoryName) FROM DimParentCategory pca WHERE pca.ParentCategoryName = a.ParentCategory FOR XML PATH, TYPE).value('.[1]','NVARCHAR(MAX)'), 2, 2000)) AS 'Parent Category' FROM (SELECT Description, FullDateAlternateKey Date, CityName City, PaymentMethodName 'Payment method', SellerName Seller, expensesTable.CategoryName Category, expensesTable.ParentCategoryName ParentCategory, TotalPurchases Total FROM (SELECT TotalPurchases, Description, dd.FullDateAlternateKey, dc.CityName, dpm.PaymentMethodName, ds.SellerName, dca.CategoryName, pca.ParentCategoryName FROM FactPurchases fp INNER JOIN DimCity dc ON fp.CityID=dc.CityID INNER JOIN DimPaymentMethod dpm ON fp.PaymentMethodID=dpm.PaymentMethodID INNER JOIN DimSeller ds ON fp.SellerID=ds.SellerID INNER JOIN FactPurchasesXDimCategory fpxdc ON fp.CityID=fpxdc.CityID AND fp.DayID=fpxdc.DayID AND fp.PaymentMethodID=fpxdc.PaymentMethodID AND fp.SellerID=fpxdc.SellerID AND fp.CategoryID=fpxdc.CategoryID AND fp.CategoryDeduplicate=fpxdc.CategoryDeduplicate INNER JOIN DimCategory dca ON fpxdc.CategoryID=dca.CategoryID INNER JOIN DimParentCategory pca ON dca.ParentCategoryID=pca.ParentCategoryID INNER JOIN DimDay dd ON fp.DayID=dd.DayID";
    if(isset($_GET['category'])){
      $sqlExpenses .= " WHERE dca.CategoryID IN (".implode(', ', $_GET['category']).")";
    }
    $sqlExpenses .= " AND fp.CategoryDeduplicate = fpxdc.CategoryDeduplicate) expensesTable) a";
    if (validateDate($_GET['startDateKey']) && validateDate($_GET['endDateKey'])) {
      $sqlExpenses .= " WHERE Date >= '".$_GET['startDateKey']."' AND Date <= '".$_GET['endDateKey']."'";
    }
    $sqlExpenses .= " ORDER BY a.Date DESC";
	
	echo $sqlExpenses;
	
	$sumExpenses = sqlsrv_query($conn, $sqlSumExpenses);
    if ($sumExpenses == FALSE)
      die( print_r( sqlsrv_errors(), true));
    $resultExpenses = sqlsrv_query($conn, $sqlExpenses);
    if ($resultExpenses == FALSE)
      die( print_r( sqlsrv_errors(), true));
	$rows = sqlsrv_has_rows($resultExpenses);
    if ($rows === true) {
	  $finances->content .="\t\t\t<table><tr><th>Description</th><th>Date</th><th>City</th><th>Payment method</th><th>Seller</th><th>Category</th><th>Parent category</th><th>Total ="; 
	  $row = sqlsrv_fetch_array($sumExpenses, SQLSRV_FETCH_ASSOC);
	  $finances->content .= $row["sumExpenses"];
	  $finances->content .=
      "</th></tr>";
      while ($row = sqlsrv_fetch_array($resultExpenses, SQLSRV_FETCH_ASSOC)) {
		$finances->content .=
        "\t\t\t<tr><td>".$row["Description"]."</td><td>".$row["Date"]->format('Y-m-d')."</td><td>".$row["City"]."</td><td>".preg_replace('/[0-9]/','*',$row["Payment method"])."</td><td>".$row["Seller"]."</td><td>".$row["Category"]."</td><td>".$row["Parent Category"]."</td><td>".$row["Total"]."</td></tr>";
      }
      $finances->content .=
      "\t\t</table>";
	} else {
      $finances->content .=
      "0 results";
    }
	sqlsrv_free_stmt($sumExpenses);
	sqlsrv_free_stmt($resultExpenses);
  }
  if(isset($_GET["submit"]) && $_GET["reporttype"]=="Income"){
    $finances->content .=
    "\t\t<h1>Income</h1>\n";
    $sqlSumSales = "SELECT SUM(Total) sumSales FROM (SELECT Description, FullDateAlternateKey Date, CityName City, PaymentMethodName 'Payment method', BuyerName Buyer, TotalSales Total FROM (SELECT Description, dd.FullDateAlternateKey, dc.CityName, dpm.PaymentMethodName, db.BuyerName, dca.CategoryName, TotalSales FROM FactSales fs INNER JOIN DimCity dc ON fs.CityID=dc.CityID INNER JOIN DimPaymentMethod dpm ON fs.PaymentMethodID=dpm.PaymentMethodID INNER JOIN DimBuyer db ON fs.BuyerID=db.BuyerID INNER JOIN FactSalesXDimCategory fsxdc ON fs.CityID=fsxdc.CityID AND fs.DayID=fsxdc.DayID AND fs.PaymentMethodID=fsxdc.PaymentMethodID AND fs.BuyerID=fsxdc.BuyerID AND fs.CategoryID=fsxdc.CategoryID AND fs.CategoryDeduplicate=fsxdc.CategoryDeduplicate INNER JOIN DimCategory dca ON fsxdc.CategoryID=dca.CategoryID INNER JOIN DimDay dd ON fs.DayID=dd.DayID";
    if(isset($_GET['category'])){
      $sqlSumSales .= " WHERE dca.CategoryID IN (".implode(', ', $_GET['category']).")";
    }
    $sqlSumSales .= ") sales GROUP BY Description, FullDateAlternateKey, CityName, PaymentMethodName, BuyerName, TotalSales) sales";
    if (validateDate($_GET['startDateKey']) && validateDate($_GET['endDateKey'])) {
      $sqlSumSales .= " WHERE Date >= '".$_GET['startDateKey']."' AND Date <= '".$_GET['endDateKey']."';";
    }
	$sqlSales = "SELECT a.Description, a.Date, a.City, a.[Payment method], a.Buyer, a.Total, (SELECT SUBSTRING((SELECT DISTINCT ', ' + CONVERT(VARCHAR(255),dca.CategoryName) FROM DimCategory dca WHERE dca.CategoryName = a.Category FOR XML PATH, TYPE).value('.[1]','NVARCHAR(MAX)'), 2, 2000)) AS Category, (SELECT SUBSTRING((SELECT DISTINCT ', ' + CONVERT(VARCHAR(255),pca.ParentCategoryName) FROM DimParentCategory pca WHERE pca.ParentCategoryName = a.ParentCategory FOR XML PATH, TYPE).value('.[1]','NVARCHAR(MAX)'), 2, 2000)) AS 'Parent Category' FROM (SELECT Description, FullDateAlternateKey Date, CityName City, PaymentMethodName 'Payment method', BuyerName Buyer, salesTable.CategoryName Category, salesTable.ParentCategoryName ParentCategory, TotalSales Total FROM (SELECT TotalSales, Description, dd.FullDateAlternateKey, dc.CityName, dpm.PaymentMethodName, db.BuyerName, dca.CategoryName FROM FactSales fs INNER JOIN DimCity dc ON fs.CityID=dc.CityID INNER JOIN DimPaymentMethod dpm ON fs.PaymentMethodID=dpm.PaymentMethodID INNER JOIN DimBuyer db ON fs.BuyerID=db.BuyerID INNER JOIN FactSalesXDimCategory fsxdc ON fs.CityID=fsxdc.CityID AND fs.DayID=fsxdc.DayID AND fs.PaymentMethodID=fsxdc.PaymentMethodID AND fs.BuyerID=fsxdc.BuyerID AND fp.CategoryID=fpxdc.CategoryID AND fp.CategoryDeduplicate=fpxdc.CategoryDeduplicate INNER JOIN DimCategory dca ON fsxdc.CategoryID=dca.CategoryID INNER JOIN DimParentCategory pca ON dca.ParentCategoryID=pca.ParentCategoryID INNER JOIN DimDay dd ON fs.DayID=dd.DayID";
    if(isset($_GET['category'])){
      $sqlSales .= " WHERE dca.CategoryID IN (".implode(', ', $_GET['category']).")";
    }
    $sqlSales .= " AND fs.CategoryDeduplicate = fsxdc.CategoryDeduplicate) salesTable) a";
    if (validateDate($_GET['startDateKey']) && validateDate($_GET['endDateKey'])) {
      $sqlSales .= " WHERE Date >= '".$_GET['startDateKey']."' AND Date <= '".$_GET['endDateKey']."'";
    }
    $sqlSales .= " ORDER BY a.Date DESC";
	
	
	echo $sqlSales;
	
	/*****************************************$sumSales = sqlsrv_query($conn, $sqlSumSales);
    if ($sumSales == FALSE)
      die( print_r( sqlsrv_errors(), true));
    $resultSales = sqlsrv_query($conn, $sqlSales);
    if ($resultSales == FALSE)
      die( print_r( sqlsrv_errors(), true));
	$rows = sqlsrv_has_rows($resultSales);
    if ($rows === true) {
	  $finances->content .="\t\t\t<table><tr><th>Description</th><th>Date</th><th>City</th><th>Payment method</th><th>Buyer</th><th>Category</th><th>Total ="; 
	  $row = sqlsrv_fetch_array($sumSales, SQLSRV_FETCH_ASSOC);
	  $finances->content .= $row["sumSales"];
	  $finances->content .=
      "</th></tr>";
      while ($row = sqlsrv_fetch_array($resultSales, SQLSRV_FETCH_ASSOC)) {
		$finances->content .=
        "\t\t\t<tr><td>".$row["Description"]."</td><td>".$row["Date"]->format('Y-m-d')."</td><td>".$row["City"]."</td><td>".preg_replace('/[0-9]/','*',$row["Payment method"])."</td><td>".$row["Buyer"]."</td><td>".$row["Category"]."</td><td>".$row["Total"]."</td></tr>";
      }
      $finances->content .=
      "\t\t</table>";
	} else {
      $finances->content .=
      "0 results";
    }
	sqlsrv_free_stmt($sumSales);
	sqlsrv_free_stmt($resultSales);*****************************************/
	echo $sqlSales;
  }
?>