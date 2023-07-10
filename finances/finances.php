<?php
  include '../../db.inc';
  if (!isset($_POST['uname']) && !isset($_POST['psw']) && !isset($_SESSION["user"])) {
    $finances ->content .=
    "\t\t\t<div>
	 \t\t\t<h1>Finances</h1>
	 \t\t\t<button onclick=\"document.getElementById('loginform').style.display='block'\" style=\"width:auto;\">Login</button>
	 \t\t\t<div id=\"loginform\" class=\"modal\">
	 \t\t\t</div>
	 \t\t</div>\n";
  }
?>