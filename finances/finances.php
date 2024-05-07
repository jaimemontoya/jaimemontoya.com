<?php
  session_start();
  include '../../db.inc';
  $finances->content .=
  "\t\t\t<h1>Finances</h1>
  \t\t<form action=\""."index.php"."\" method=\"GET\">
  \t\t</form>
  ";
  
?>