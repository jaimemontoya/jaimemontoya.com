<?php
    $serverName = "jaimemontoya.database.windows.net"; // update me
	$connectionOptions = array(
        "Database" => "Finances", // update me
        "Uid" => "jaimemontoya", // update me
        "PWD" => "SuperEasy@1" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
	echo $conn;
	
	//phpinfo();
	
	
    $tsql= "SELECT DayID, FullDateAlternateKey FROM DimDay ORDER BY DayID DESC";
    $getResults= sqlsrv_query($conn, $tsql);
    /*echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['DayID'] . " " . $row['FullDateAlternateKey'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);*/
?>