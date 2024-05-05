<?php
  require("../../capital.php");
  $weight = new CapitalPage();
  $weight->title = "Jaime Montoya's 2024 capital history by month";
  $weight->parentPage = "Capital";
  $weight->metaDescription = "Jaime Montoya's 2024 capital history by month.";
  require("2024-book-info.php");
  require("chart.php");
  $weight->Display();
?>