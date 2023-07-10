<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112469917-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'UA-112469917-1');
		</script>
		<title>Finances</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			body{font-family:Arial,Helvetica,sans-serif;color:#fff;background:#000}
			/* Full-width input fields */
			input[type=text], input[type=password] {
			  width: 100%;
			  padding: 12px 20px;
			  margin: 8px 0;
			  display: inline-block;
			  border: 1px solid #ccc;
			  box-sizing: border-box;
			}
			/* Set a style for all buttons */
			button {
			  background-color: #04AA6D;
			  color: white;
			  padding: 14px 20px;
			  margin: 8px 0;
			  border: none;
			  cursor: pointer;
			  width: 100%;
			}
			button:hover {
			  opacity: 0.8;
			}
			/* Extra styles for the cancel button */
			.cancelbtn {
			  width: auto;
			  padding: 10px 18px;
			  background-color: #f44336;
			}
			/* Center the image and position the close button */
			.imgcontainer {
			  text-align: center;
			  margin: 24px 0 12px 0;
			  position: relative;
			}
			img.avatar {
			  width: 40%;
			  border-radius: 50%;
			}
			.container {
			  padding: 16px;
			}
			span.psw {
			  float: right;
			  padding-top: 16px;
			}
			/* The Modal (background) */
			.modal {
			  display: none; /* Hidden by default */
			  position: fixed; /* Stay in place */
			  z-index: 1; /* Sit on top */
			  left: 0;
			  top: 0;
			  width: 100%; /* Full width */
			  height: 100%; /* Full height */
			  overflow: auto; /* Enable scroll if needed */
			  background-color: rgb(0,0,0); /* Fallback color */
			  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			  padding-top: 60px;
			}
			/* Modal Content/Box */
			.modal-content {
			  background-color: #fefefe;
			  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
			  border: 1px solid #888;
			  width: 80%; /* Could be more or less, depending on screen size */
			}
			/* The Close Button (x) */
			.close {
			  position: absolute;
			  right: 25px;
			  top: 0;
			  color: #000;
			  font-size: 35px;
			  font-weight: bold;
			}
			.close:hover,
			.close:focus {
			  color: red;
			  cursor: pointer;
			}
			/* Add Zoom Animation */
			.animate {
			  -webkit-animation: animatezoom 0.6s;
			  animation: animatezoom 0.6s
			}
			@-webkit-keyframes animatezoom {
			  from {-webkit-transform: scale(0)} 
			  to {-webkit-transform: scale(1)}
			}		  
			@keyframes animatezoom {
			  from {transform: scale(0)} 
			  to {transform: scale(1)}
			}
			/* Change styles for span and cancel button on extra small screens */
			@media screen and (max-width: 300px) {
			  span.psw {
				 display: block;
				 float: none;
			  }
			  .cancelbtn {
				 width: 100%;
			  }
			}
			.logo{padding-top:15px}
			.logo a{font:20px/20px Carter One;color:#04AA6D;text-decoration:none;font-size:35px}
		</style>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Carter+One">
	</head>
	<body>		
		<?php
		include '../../db.inc';
		/* Content of '../../db.inc':
		$servername = "localhost";
		$username = "[Type your username here]";
		$password = "[Type your password here]";
		$dbname = "[Type your database here]";
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
		}
		*/
		////if (!isset($_SESSION["user"])) {
		if (     !isset($_POST['uname']) && !isset($_POST['psw']) &&   (!isset($_SESSION["user"]))   ) {
		?>
		<h2>Finances</h2>
		<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
		<div id="id01" class="modal">
		  <form class="modal-content animate" action="" method="post">
			<div class="imgcontainer">
			  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			  <div class="logo">
				<a href="/" title="Finances">Finances</a>
			</div>
			</div>
			<div class="container">
			  <label for="uname"><b>Username</b></label>
			  <input type="text" placeholder="Enter Username" name="uname" required>
			  <label for="psw"><b>Password</b></label>
			  <input type="password" placeholder="Enter Password" name="psw" required>				
			  <button type="submit">Login</button>
			  <label>
				<input type="checkbox" checked="checked" name="remember"> Remember me
			  </label>
			</div>
			<div class="container" style="background-color:#f1f1f1">
			  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
			  <span class="psw">Forgot <a href="#">password?</a></span>
			</div>
		  </form>
		</div>
		<script>
		// Get the modal
		var modal = document.getElementById('id01');
		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
		</script>
		<?php
		}
		/* These are our valid username and passwords */
		$user = 'jaimemontoya';
		$pass = 'jaimemontoya.com';
		if (isset($_POST['uname']) && isset($_POST['psw']) || (isset($_SESSION["user"]))) {
			if (($_POST['uname'] == $user) && ($_POST['psw'] == $pass) || (isset($_SESSION["user"]))) {
				if (isset($_POST['rememberme'])) {
					/* Set cookie to last 1 year */
					setcookie('username', $_POST['username'], time()+60*60*24*365, '/montoya-money-manager', 'www.jaimemontoya.com');
					setcookie('password', md5($_POST['password']), time()+60*60*24*365, '/montoya-money-manager', 'www.jaimemontoya.com');
				} else {
					/* Cookie expires when browser closes */
					setcookie('username', $_POST['username'], false, '/montoya-money-manager', 'www.jaimemontoya.com');
					setcookie('password', md5($_POST['password']), false, '/montoya-money-manager', 'www.jaimemontoya.com');
				}
				$_SESSION["user"] = "jmontoya";
				echo "<h1>Finances</h1>";
				?>
				<form action="<?php echo "index.php";?>" method="GET">
					<div>Date format 'Y-m-d', e.g. 2023-01-18</div>
					<div>Start date:</div>
					<div><input type="text" name="startDateKey" value="<?php echo $_GET['startDateKey'];?>"></div>
					<div>End date:</div>
					<div><input type="text" name="endDateKey" value="<?php echo $_GET['endDateKey'];?>"></div>
					<br />
					<div>Select categories:</div>
					<div>
						<?php
						$sqlGetCategories = "SELECT * FROM DimCategory ORDER BY CategoryName ASC;";
						$resultCategories = $conn->query($sqlGetCategories);
						if ($resultCategories->num_rows > 0) {
							while($row = $resultCategories->fetch_assoc()) {
								echo '<input type="checkbox" name="category[]" value="'.$row['CategoryID'].'" ';
								if (in_array($row['CategoryID'], $_GET['category'])) {
									echo "checked";
								}
								echo ' />'.$row['CategoryName'].' ';
							}
						} else {
							echo "0 categories";
						}
						?>
					</div>
					<br />
					<div><input type="submit" value="Submit"></div>
				</form>
				<?php
				echo "<h1>Expenses</h1>";
				function validateDate($date, $format = 'Y-m-d'){
					$d = DateTime::createFromFormat($format, $date);
					return $d && $d->format($format) === $date;
				}
				$sqlSumExpenses = "SELECT SUM(Total) sumExpenses FROM (SELECT Description, DateKey Date, CityName City, PaymentMethodName 'Payment method', SellerName Seller, GROUP_CONCAT(CategoryName SEPARATOR ', ') Category, TotalPurchases Total FROM (SELECT TotalPurchases, Description, dd.DateKey, dc.CityName, dpm.PaymentMethodName, ds.SellerName, dca.CategoryName FROM FactPurchases fp INNER JOIN DimCity dc ON fp.CityID=dc.CityID INNER JOIN DimPaymentMethod dpm ON fp.PaymentMethodID=dpm.PaymentMethodID INNER JOIN DimSeller ds ON fp.SellerID=ds.SellerID INNER JOIN FactPurchasesXDimCategory fpxdc ON fp.CityID=fpxdc.CityID AND fp.DayID=fpxdc.DayID AND fp.PaymentMethodID=fpxdc.PaymentMethodID AND fp.SellerID=fpxdc.SellerID INNER JOIN DimCategory dca ON fpxdc.CategoryID=dca.CategoryID INNER JOIN DimDay dd ON fp.DayID=dd.DayID";
				if(isset($_GET['category'])){
					$sqlSumExpenses .= " WHERE dca.CategoryID IN (".implode(', ', $_GET['category']).")";
				}
				$sqlSumExpenses .= " AND fp.TicketDivisionNumber = fpxdc.TicketDivisionNumber) purchases GROUP BY TotalPurchases, Description, DateKey, CityName, PaymentMethodName, SellerName ORDER BY DateKey DESC) expenses";
				if (validateDate($_GET['startDateKey']) && validateDate($_GET['endDateKey'])) {
					$sqlSumExpenses .= " WHERE Date >= '".$_GET['startDateKey']."' AND Date <= '".$_GET['endDateKey']."';";
				}
				$sqlSumSales = "SELECT SUM(Total) sumSales FROM (SELECT Description, DateKey Date, CityName City, PaymentMethodName 'Payment method', BuyerName Buyer, GROUP_CONCAT(CategoryName SEPARATOR ', ') Category, TotalSales Total FROM (SELECT Description, dd.DateKey, dc.CityName, dpm.PaymentMethodName, db.BuyerName, dca.CategoryName, TotalSales FROM FactSales fs INNER JOIN DimCity dc ON fs.CityID=dc.CityID INNER JOIN DimPaymentMethod dpm ON fs.PaymentMethodID=dpm.PaymentMethodID INNER JOIN DimBuyer db ON fs.BuyerID=db.BuyerID INNER JOIN FactSalesXDimCategory fsxdc ON fs.CityID=fsxdc.CityID AND fs.DayID=fsxdc.DayID AND fs.PaymentMethodID=fsxdc.PaymentMethodID AND fs.BuyerID=fsxdc.BuyerID INNER JOIN DimCategory dca ON fsxdc.CategoryID=dca.CategoryID INNER JOIN DimDay dd ON fs.DayID=dd.DayID";
				if(isset($_GET['category'])){
					$sqlSumSales .= " WHERE dca.CategoryID IN (".implode(', ', $_GET['category']).")";
				}
				$sqlSumSales .= ") sales GROUP BY Description, DateKey, CityName, PaymentMethodName, BuyerName, TotalSales ORDER BY DateKey DESC) sales";
				if (validateDate($_GET['startDateKey']) && validateDate($_GET['endDateKey'])) {
					$sqlSumSales .= " WHERE Date >= '".$_GET['startDateKey']."' AND Date <= '".$_GET['endDateKey']."';";
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
					echo "<table><tr><th>Description</th><th>Date</th><th>City</th><th>Payment method</th><th>Seller</th><th>Category</th><th>Total = ".$sumExpenses->fetch_assoc()[sumExpenses]."</th></tr>";
					while($row = $resultExpenses->fetch_assoc()) {
						echo "<tr><td>" . $row["Description"]. "</td><td>" . $row["Date"]. "</td><td>" . $row["City"]. "</td><td>" . preg_replace('/[0-9]/', '*', $row["Payment method"]). "</td><td>" . $row["Seller"]. "</td><td>" . $row["Category"]. "</td><td>" . $row["Total"]. "</td></tr>";
					}
					echo "</table>";
				} else {
					echo "0 results";
				}
				echo "<h1>Income</h1>";
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
					echo "<table><tr><th>Description</th><th>Date</th><th>City</th><th>Payment method</th><th>Buyer</th><th>Category</th><th>Total = ".$sumSales->fetch_assoc()[sumSales]."</th></tr>";
					while($row = $resultSales->fetch_assoc()) {
						echo "<tr><td>" . $row["Description"]. "</td><td>" . $row["Date"]. "</td><td>" . $row["City"]. "</td><td>" . $row["Payment method"]. "</td><td>" . $row["Buyer"]. "</td><td>" . $row["Category"]. "</td><td>" . $row["Total"]. "</td></tr>";
					}
					echo "</table>";
				} else {
					echo "0 results";
				}
				$conn->close();
			} else {
				echo 'Username/Password Invalid';
			}
		} else {
			echo 'You must supply a username and password.';
		}
		?>
	</body>
</html>