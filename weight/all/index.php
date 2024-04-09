<?php
  require("../../weight.php");
  $weight = new WeightPage();
  $weight->title = "Jaime Montoya's weight history by year";
  $weight->parentPage = "Weight";
  $weight->metaDescription = "Jaime Montoya's weight history by year since since October 29, 2019 to present.";
  require("all-book-info.php");
  require("chart.php");
  $weight->Display();
?>