<?php
$servername = "localhost";
$username = "jmontoya";
$password = "SuperEasy@1";
$dbname = "finance";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
?>