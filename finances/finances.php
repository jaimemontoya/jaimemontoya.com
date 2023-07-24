<?php
  session_start();
  include '../../db.inc';
  if (!isset($_POST['uname']) && !isset($_POST['psw']) && !isset($_SESSION["user"])) {
    $finances->content .=
    "\t\t\t<div>
     \t\t\t<h1>Finances</h1>
     \t\t\t<button onclick=\"document.getElementById('loginform').style.display='block'\" class=\"widthauto\">Login</button>
     \t\t\t<div id=\"loginform\" class=\"modal\">
     \t\t\t\t<form class=\"modal-content animate\" action=\"\" method=\"post\">
     \t\t\t\t\t<div class=\"imgcontainer\">
     \t\t\t\t\t\t<span onclick=\"document.getElementById('loginform').style.display='none'\" class=\"close\" title=\"Close Modal\">&times;</span>
     \t\t\t\t\t\t<div class=\"logo\">
     \t\t\t\t\t\t\t<a href=\"/\" title=\"Finances\">Finances</a>
     \t\t\t\t\t\t</div>
     \t\t\t\t\t</div>
     \t\t\t\t\t<div class=\"container\">
     \t\t\t\t\t\t<label for=\"uname\"><b>Username</b></label>
     \t\t\t\t\t\t<input type=\"text\" placeholder=\"Enter Username\" name=\"uname\" required>
     \t\t\t\t\t\t<label for=\"psw\"><b>Password</b></label>
     \t\t\t\t\t\t<input type=\"password\" placeholder=\"Enter Password\" name=\"psw\" required>
     \t\t\t\t\t\t<button type=\"submit\">Login</button>
     \t\t\t\t\t\t<label>
     \t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"checked\" name=\"remember\"> Remember me
     \t\t\t\t\t\t</label>
     \t\t\t\t\t</div>
     \t\t\t\t\t<div class=\"container\">
     \t\t\t\t\t\t<button type=\"button\" onclick=\"document.getElementById('loginform').style.display='none'\" class=\"cancelbtn\">Cancel</button>
     \t\t\t\t\t</div>
     \t\t\t\t</form>
     \t\t\t</div>
     \t\t\t<script>
     \t\t\tvar modal = document.getElementById('loginform');
     \t\t\twindow.onclick = function(event) {
     \t\t\t\tif (event.target == modal) {
     \t\t\t\t\tmodal.style.display = \"none\";
     \t\t\t\t}
     \t\t\t}
     \t\t\t</script>
     \t\t</div>\n";
  }
  $user = 'jaimemontoya';
  $pass = 'jaimemontoya.com';
  if (isset($_POST['uname']) && isset($_POST['psw']) || isset($_SESSION["user"])) {
    if (($_POST['uname'] == $user) && ($_POST['psw'] == $pass) || (isset($_SESSION["user"]))) {
      if (isset($_POST['rememberme'])) {
        setcookie('username', $_POST['username'], time()+60*60*24*365, '/finances', 'www.jaimemontoya.com');
        setcookie('password', md5($_POST['password']), time()+60*60*24*365, '/finances', 'www.jaimemontoya.com');
      } else {
        setcookie('username', $_POST['username'], false, '/finances', 'www.jaimemontoya.com');
		setcookie('password', md5($_POST['password']), false, '/finances', 'www.jaimemontoya.com');
      }
      $_SESSION["user"] = "jaimemontoya";
      $finances->content .=
      "\t\t\t<h1>Finances</h1>
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
        $resultCategories = $conn->query($sqlGetCategories);
        if ($resultCategories->num_rows > 0) {
          while($row = $resultCategories->fetch_assoc()) {
            $finances->content .=
            "\t\t\t\t\t<input type=\"checkbox\" name=\"category[]\" value=\"".$row['CategoryID']."\" ";
            if (in_array($row['CategoryID'], $_GET['category'])) {
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
        $sqlSumExpenses = "SELECT SUM(Total) sumExpenses FROM (SELECT Description, DateKey Date, CityName City, PaymentMethodName 'Payment method', SellerName Seller, GROUP_CONCAT(CategoryName SEPARATOR ', ') Category, TotalPurchases Total FROM (SELECT TotalPurchases, Description, dd.DateKey, dc.CityName, dpm.PaymentMethodName, ds.SellerName, dca.CategoryName FROM FactPurchases fp INNER JOIN DimCity dc ON fp.CityID=dc.CityID INNER JOIN DimPaymentMethod dpm ON fp.PaymentMethodID=dpm.PaymentMethodID INNER JOIN DimSeller ds ON fp.SellerID=ds.SellerID INNER JOIN FactPurchasesXDimCategory fpxdc ON fp.CityID=fpxdc.CityID AND fp.DayID=fpxdc.DayID AND fp.PaymentMethodID=fpxdc.PaymentMethodID AND fp.SellerID=fpxdc.SellerID INNER JOIN DimCategory dca ON fpxdc.CategoryID=dca.CategoryID INNER JOIN DimDay dd ON fp.DayID=dd.DayID";
        if(isset($_GET['category'])){
          $sqlSumExpenses .= " WHERE dca.CategoryID IN (".implode(', ', $_GET['category']).")";
        }
        $sqlSumExpenses .= " AND fp.TicketDivisionNumber = fpxdc.TicketDivisionNumber) purchases GROUP BY TotalPurchases, Description, DateKey, CityName, PaymentMethodName, SellerName ORDER BY DateKey DESC) expenses";
        if (validateDate($_GET['startDateKey']) && validateDate($_GET['endDateKey'])) {
          $sqlSumExpenses .= " WHERE Date >= '".$_GET['startDateKey']."' AND Date <= '".$_GET['endDateKey']."';";
        }
        $sqlExpenses = "SELECT * FROM (SELECT Description, DateKey Date, CityName City, PaymentMethodName 'Payment method', SellerName Seller, GROUP_CONCAT(CategoryName SEPARATOR ', ') Category, TotalPurchases Total FROM (SELECT TotalPurchases, Description, dd.DateKey, dc.CityName, dpm.PaymentMethodName, ds.SellerName, dca.CategoryName FROM FactPurchases fp INNER JOIN DimCity dc ON fp.CityID=dc.CityID INNER JOIN DimPaymentMethod dpm ON fp.PaymentMethodID=dpm.PaymentMethodID INNER JOIN DimSeller ds ON fp.SellerID=ds.SellerID INNER JOIN FactPurchasesXDimCategory fpxdc ON fp.CityID=fpxdc.CityID AND fp.DayID=fpxdc.DayID AND fp.PaymentMethodID=fpxdc.PaymentMethodID AND fp.SellerID=fpxdc.SellerID INNER JOIN DimCategory dca ON fpxdc.CategoryID=dca.CategoryID INNER JOIN DimDay dd ON fp.DayID=dd.DayID";
        if(isset($_GET['category'])){
          $sqlExpenses .= " WHERE dca.CategoryID IN (".implode(', ', $_GET['category']).")";
        }
        $sqlExpenses .= " AND fp.TicketDivisionNumber = fpxdc.TicketDivisionNumber) purchases GROUP BY TotalPurchases, Description, DateKey, CityName, PaymentMethodName, SellerName ORDER BY DateKey DESC) expensesTable";
        if (validateDate($_GET['startDateKey']) && validateDate($_GET['endDateKey'])) {
          $sqlExpenses .= " WHERE Date >= '".$_GET['startDateKey']."' AND Date <= '".$_GET['endDateKey']."'";
        }
        $sumExpenses = $conn->query($sqlSumExpenses);
        $resultExpenses = $conn->query($sqlExpenses);
        if ($resultExpenses->num_rows > 0) {
          $finances->content .=
          "\t\t\t<table><tr><th>Description</th><th>Date</th><th>City</th><th>Payment method</th><th>Seller</th><th>Category</th><th>Total = ".$sumExpenses->fetch_assoc()[sumExpenses]."</th></tr>";
          while($row = $resultExpenses->fetch_assoc()) {
            $finances->content .=
            "\t\t\t<tr><td>".$row["Description"]."</td><td>".$row["Date"]."</td><td>".$row["City"]."</td><td>".preg_replace('/[0-9]/','*',$row["Payment method"])."</td><td>".$row["Seller"]."</td><td>".$row["Category"]."</td><td>".$row["Total"]."</td></tr>";
          }
          $finances->content .=
          "\t\t</table>";
        } else {
          $finances->content .=
          "0 results";
        }
	  }
	  if(isset($_GET["submit"]) && $_GET["reporttype"]=="Income"){
		$finances->content .=
        "\t\t<h1>Income</h1>\n";
		$sqlSumSales = "SELECT SUM(Total) sumSales FROM (SELECT Description, DateKey Date, CityName City, PaymentMethodName 'Payment method', BuyerName Buyer, GROUP_CONCAT(CategoryName SEPARATOR ', ') Category, TotalSales Total FROM (SELECT Description, dd.DateKey, dc.CityName, dpm.PaymentMethodName, db.BuyerName, dca.CategoryName, TotalSales FROM FactSales fs INNER JOIN DimCity dc ON fs.CityID=dc.CityID INNER JOIN DimPaymentMethod dpm ON fs.PaymentMethodID=dpm.PaymentMethodID INNER JOIN DimBuyer db ON fs.BuyerID=db.BuyerID INNER JOIN FactSalesXDimCategory fsxdc ON fs.CityID=fsxdc.CityID AND fs.DayID=fsxdc.DayID AND fs.PaymentMethodID=fsxdc.PaymentMethodID AND fs.BuyerID=fsxdc.BuyerID INNER JOIN DimCategory dca ON fsxdc.CategoryID=dca.CategoryID INNER JOIN DimDay dd ON fs.DayID=dd.DayID";
        if(isset($_GET['category'])){
          $sqlSumSales .= " WHERE dca.CategoryID IN (".implode(', ', $_GET['category']).")";
        }
        $sqlSumSales .= ") sales GROUP BY Description, DateKey, CityName, PaymentMethodName, BuyerName, TotalSales ORDER BY DateKey DESC) sales";
        if (validateDate($_GET['startDateKey']) && validateDate($_GET['endDateKey'])) {
          $sqlSumSales .= " WHERE Date >= '".$_GET['startDateKey']."' AND Date <= '".$_GET['endDateKey']."';";
        }
		$sqlSales = "SELECT * FROM (SELECT Description, DateKey Date, CityName City, PaymentMethodName 'Payment method', BuyerName Buyer, GROUP_CONCAT(CategoryName SEPARATOR ', ') Category, TotalSales Total FROM (SELECT Description, dd.DateKey, dc.CityName, dpm.PaymentMethodName, db.BuyerName, dca.CategoryName, TotalSales FROM FactSales fs INNER JOIN DimCity dc ON fs.CityID=dc.CityID INNER JOIN DimPaymentMethod dpm ON fs.PaymentMethodID=dpm.PaymentMethodID INNER JOIN DimBuyer db ON fs.BuyerID=db.BuyerID INNER JOIN FactSalesXDimCategory fsxdc ON fs.CityID=fsxdc.CityID AND fs.DayID=fsxdc.DayID AND fs.PaymentMethodID=fsxdc.PaymentMethodID AND fs.BuyerID=fsxdc.BuyerID INNER JOIN DimCategory dca ON fsxdc.CategoryID=dca.CategoryID INNER JOIN DimDay dd ON fs.DayID=dd.DayID";
		if(isset($_GET['category'])){
		  $sqlSales .= " WHERE dca.CategoryID IN (".implode(', ', $_GET['category']).")";
		}
		$sqlSales .= ") sales GROUP BY Description, DateKey, CityName, PaymentMethodName, BuyerName, TotalSales ORDER BY DateKey DESC) salesTable";
		if (validateDate($_GET['startDateKey']) && validateDate($_GET['endDateKey'])) {
		  $sqlSales .= " WHERE Date >= '".$_GET['startDateKey']."' AND Date <= '".$_GET['endDateKey']."';";
		}
		$sumSales = $conn->query($sqlSumSales);		
		$resultSales = $conn->query($sqlSales);
		if ($resultSales->num_rows > 0) {
		  $finances->content .=
		  "\t\t\t<table><tr><th>Description</th><th>Date</th><th>City</th><th>Payment method</th><th>Buyer</th><th>Category</th><th>Total = ".$sumSales->fetch_assoc()[sumSales]."</th></tr>";
		  while($row = $resultSales->fetch_assoc()) {
		     $finances->content .=
			 "<tr><td>" . $row["Description"]. "</td><td>" . $row["Date"]. "</td><td>" . $row["City"]. "</td><td>" . $row["Payment method"]. "</td><td>" . $row["Buyer"]. "</td><td>" . $row["Category"]. "</td><td>" . $row["Total"]. "</td></tr>";
		  }
		  $finances->content .=
		  "\t\t\t</table>";
		} else {echo "Bye";
		  $finances->content .=
		  "0 results";
		}
      }		
	  $conn->close();
    } else {
      $finances->content .=
	  "\t\t\t<a href=\"/finances\"><button class=\"widthauto\">Try again</button></a>
	  \t\t\t<div>Username/Password invalid.</div>";
    }
  } else {
    $finances->content .=
    "\t\t\tYou must supply a username and password.\n";
  }
?>