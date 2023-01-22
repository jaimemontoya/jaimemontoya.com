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
		$sql = "SELECT Description, DateKey Date, CityName City, PaymentMethodName 'Payment method', BuyerName Buyer, GROUP_CONCAT(CategoryName SEPARATOR ', ') Category, TotalSales Total FROM (SELECT Description, dd.DateKey, dc.CityName, dpm.PaymentMethodName, db.BuyerName, dca.CategoryName, TotalSales FROM FactSales fs INNER JOIN DimCity dc ON fs.CityID=dc.CityID INNER JOIN DimPaymentMethod dpm ON fs.PaymentMethodID=dpm.PaymentMethodID INNER JOIN DimBuyer db ON fs.BuyerID=db.BuyerID INNER JOIN FactSalesXDimCategory fsxdc ON fs.CityID=fsxdc.CityID AND fs.DayID=fsxdc.DayID AND fs.PaymentMethodID=fsxdc.PaymentMethodID AND fs.BuyerID=fsxdc.BuyerID INNER JOIN DimCategory dca ON fsxdc.CategoryID=dca.CategoryID INNER JOIN DimDay dd ON fs.DayID=dd.DayID) sales GROUP BY Description, DateKey, CityName, PaymentMethodName, BuyerName, TotalSales ORDER BY DateKey DESC;";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			echo "<table><tr><th>Description</th><th>Date</th><th>City</th><th>Payment methodPayment method</th><th>Buyer</th><th>Category</th><th>Total</th></tr>";
			print_r($result);
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