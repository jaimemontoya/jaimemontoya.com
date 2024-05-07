<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	$serverName = "jaimemontoya.database.windows.net"; // update me
	$connectionOptions = array(
        "Database" => "Finances", // update me
        "Uid" => "jaimemontoya", // update me
        "PWD" => "SuperEasy@1" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "SELECT DayID FROM DimDay ORDER BY DayID DESC";
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
     echo ($row['DayID'] . "<br />");
    }
    sqlsrv_free_stmt($getResults);
?>