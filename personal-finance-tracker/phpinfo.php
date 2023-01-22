<?php

$servername = "localhost";
$username = "jmontoya";
$password = "SuperEasy@1";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<!DOCTYPE html>
<html>
	<head>Personal Finance Tracker</head>
	<body>

	<?php
	$servername = "localhost";
	$username = "jmontoya";
	$password = "SuperEasy@1";
	$dbname = "finance";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT id, firstname, lastname FROM MyGuests";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo "<table><tr><th>ID</th><th>Name</th></tr>";
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. " " . $row["lastname"]. "</td></tr>";
		}
		echo "</table>";
	} else {
		echo "0 results";
	}

	$conn->close();
	?>

	</body>
</html>