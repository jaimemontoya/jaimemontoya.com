<?php
  require("../finances.php");
  $finances = new FinancesPage();
  $finances->title = "Personal finance software";
  $finances->metaDescription = "Personal finance software created by Jaime Montoya.";
  require("finances.php");
  $finances->Display();  
?>