<?php
  include '../../db.inc';
  if (!isset($_POST['uname']) && !isset($_POST['psw']) && !isset($_SESSION["user"])) {
    $finances ->content .=
    "\t\t\t<div>
     \t\t\t<h1>Finances</h1>
     \t\t\t<button onclick=\"document.getElementById('loginform').style.display='block'\" class=\"widthauto\">Login</button>
     \t\t\t<div id=\"loginform\" class=\"modal\">
     \t\t\t\t<form class=\"modal-content animate\" action=\"\" method=\"post\">
     \t\t\t\t\t<div class=\"imgcontainer\">
     \t\t\t\t\t\t<span onclick=\"document.getElementById('loginform').style.display='none'\" class=\"close\" title=\"Close Modal\">&times;</span>
     \t\t\t\t\t\t<div class=\"logo\">
     \t\t\t\t\t\t\t<a href=\"/\" title=\"Finances\">Finances</a>
     \t\t\t\t\t\t</div>
     \t\t\t\t\t</div>
     \t\t\t\t\t<div class=\"container\">
     \t\t\t\t\t\t<label for=\"uname\"><b>Username</b></label>
     \t\t\t\t\t\t<input type=\"text\" placeholder=\"Enter Username\" name=\"uname\" required>
     \t\t\t\t\t\t<label for=\"psw\"><b>Password</b></label>
     \t\t\t\t\t\t<input type=\"password\" placeholder=\"Enter Password\" name=\"psw\" required>
     \t\t\t\t\t\t<button type=\"submit\">Login</button>
     \t\t\t\t\t\t<label>
     \t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"checked\" name=\"remember\"> Remember me
     \t\t\t\t\t\t</label>
     \t\t\t\t\t</div>
     \t\t\t\t\t<div class=\"container\">
	 \t\t\t\t\t\t<button type=\"button\" onclick=\"document.getElementById('loginform').style.display='none'\" class=\"cancelbtn\">Cancel</button>
	 \t\t\t\t\t\t<span class=\"psw\">Forgot <a href=\"#\">password?</a></span>
     \t\t\t\t\t</div>
     \t\t\t\t</form>
     \t\t\t</div>
	 \t\t\t<script>
	 \t\t\tvar modal = document.getElementById('loginform');
	 \t\t\twindow.onclick = function(event) {
     \t\t\t\tif (event.target == modal) {
     \t\t\t\t\tmodal.style.display = \"none\";
     \t\t\t\t}
     \t\t\t}
	 \t\t\t</script>
     \t\t</div>\n";
  }
?>