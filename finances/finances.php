<?php
  session_start();
  include '../../db.inc';
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
	$resultCategories = sqlsrv_query($conn, $sqlGetCategories);
	if ($resultCategories == FALSE)
      echo (sqlsrv_errors());
    $rows = sqlsrv_has_rows($resultCategories);
    if ($rows === true)
      echo "There are rows. <br />";
    else 
      echo "There are no rows. <br />";
	
	
	
	
	
	/*while ($row = sqlsrv_fetch_array($resultCategories, SQLSRV_FETCH_ASSOC)) {
      echo ($row['CategoryID'] . " ");*/
	//Establishes the connection
  $tsql= "SELECT * FROM DimCategory WHERE CategoryID IN (SELECT DISTINCT CategoryID FROM FactSalesXDimCategory) ORDER BY CategoryName ASC;";
  var_dump($conn);
  if( $conn ) {
    echo "Connection established.<br />";
  }else{
    echo "Connection could not be established.<br />";
    die( print_r( sqlsrv_errors(), true));
  }
  $getResults= sqlsrv_query($conn, $tsql);
  echo ("Reading data from table:" . "<br />");
  if ($getResults == FALSE)
    echo (sqlsrv_errors());



  while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
    echo ($row['CategoryID'] . "
");
  }
  sqlsrv_free_stmt($getResults);
	  
	  
	  
	  
	  
	  
	  
	  
	
  
  
    if (sqlsrv_num_rows($resultCategories) > 0) {
      echo "Greater than 0";
	} else {
      $finances->content .=
      "0 categories";
    }
	/*if ($resultCategories->num_rows > 0) {
      echo "Greater than 0";
    } else {
      $finances->content .=
      "0 categories";
    }*/
    $finances->content .=
    "\t\t\t\t</div>";
  }
  $finances->content .=
  "\t\t\t<div><input name=\"submit\" type=\"submit\" value=\"Submit\" id=\"submit\"></div>
  \t\t</form>
  ";
?>