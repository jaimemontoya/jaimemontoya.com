<!DOCTYPE html>
<html>
	<head>
		<title>Personal Finance Tracker</title>
	</head>
	<body>
		<h1>Sales</h1>
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
			echo "<table><tr><th>Description</th><th>Date</th><th>City</th><th>Payment methodPayment method</th><th>Buyer</th><th>Category</th><th>Total</th></tr>";
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["Description"]. "</td><td>" . $row["DateKey"]. " " . $row["CityName"]. "</td><td>" . $row["PaymentMethodName"]. " " . $row["BuyerName"]. "</td><td>" . $row["Category"]. " " . $row["TotalSales"]. "</td></tr>";
			}
			echo "</table>";
		} else {
			echo "0 results";
		}

		$conn->close();
		?>
		<h1>Purchases</h1>
	</body>
</html>