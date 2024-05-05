<?php
  require("../../capital.php");
  $weight = new CapitalPage();
  $weight->title = "Jaime Montoya's capital history by year";
  $weight->parentPage = "Capital";
  $weight->metaDescription = "Jaime Montoya's Capital history by year since since May 5, 2024 to present.";
  require("all-book-info.php");
  require("chart.php");
  $weight->Display();
?>