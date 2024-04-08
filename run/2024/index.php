<?php
  require("../../running.php");
  $running = new RunningPage();
  $running->title = "Jaime Montoya's 2024 running history by month";
  $running->parentPage = "Running";
  $running->metaDescription = "Jaime Montoya's 2024 running history by month.";
  require("2024-book-info.php");
  require("chart.php");
  $running->Display();
?>