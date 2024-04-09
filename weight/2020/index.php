<?php
  require("../../weight.php");
  $weight = new WeightPage();
  $weight->title = "Jaime Montoya's 2020 weight history by month";
  $weight->parentPage = "Weight";
  $weight->metaDescription = "Jaime Montoya's 2020 weight history by month.";
  require("2020-book-info.php");
  require("chart.php");
  $weight->Display();
?>