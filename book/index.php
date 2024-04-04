<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Reviews for books read by Jaime Montoya";
  $index->metaDescription = "Reviews for books read by Jaime Montoya from cover to cover.";
  $index->content .= "<h1>Reviews for books read by Jaime Montoya</h1>";
  require("american-prometheus/american-prometheus-book-info.php");
  $index->Display();
?>
