<?php
  include '../../db.inc';
  if (!isset($_POST['uname']) && !isset($_POST['psw']) && !isset($_SESSION["user"])) {
    $finances ->content .=
    "\t\t\t<div>\t\t\t<h1>Finances</h1>
     \t\t\t<button onclick=\"document.getElementById('loginform').style.display='block'\" class=\"widthauto\">Login</button>
     \t\t\t<div id=\"loginform\" class=\"modal\">
     \t\t\t<div id=\"loginform\" class=\"modal\">
     \t\t\t\t<form class=\"modal-content animate\" action=\"\" method=\"post\">
     \t\t\t\t\t<div class=\"imgcontainer\">
     \t\t\t\t\t\t<span onclick=\"document.getElementById('loginform').style.display='none'\" class=\"close\" title=\"Close Modal\">&times;</span>
     \t\t\t\t\t\t<div class=\"logo\">
     \t\t\t\t\t\t\t<a href=\"/\" title=\"Finances\">Finances</a>
     \t\t\t\t\t\t</div>
     \t\t\t\t\t</div>
     \t\t\t\t</form>
     \t\t\t</div>
     \t\t\t</div>
     \t\t</div>\n";
  }
?>