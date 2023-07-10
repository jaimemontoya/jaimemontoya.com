<?php
  include '../../db.inc';
  if (!isset($_POST['uname']) && !isset($_POST['psw']) && !isset($_SESSION["user"])) {
    $finances ->content .=
    "\t\t\t<div>
	 \t\t\t\t<h1>Finances</h1>
	 </div>\n";
  }
?>