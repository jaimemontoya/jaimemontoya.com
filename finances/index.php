<?php
  require("../finances.php");
  $finances = new FinancesPage();
  $finances->title = "Personal financial management software";
  $finances->metaDescription = "Personal financial management software created by Jaime Montoya.";
  require("finances.php");
  $finances->Display();  
?>