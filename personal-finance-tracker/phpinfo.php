<!DOCTYPE html>
<html>
	<!--<head>Personal Finance Tracker</head>-->
	<body>
	<?php
	$servername = "localhost";
	$username = "jmontoya";
	$password = "SuperEasy@1";
	$dbname = "finance";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT TotalSales, Description, CityID FROM FactSales";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		echo "<table><tr><th>ID</th><th>Name</th></tr>";
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["TotalSales"]. "</td><td>" . $row["Description"]. " " . $row["CityID"]. "</td></tr>";
		}
		echo "</table>";
	} else {
		echo "0 results";
	}

	$conn->close();
	?>

	</body>
</html>