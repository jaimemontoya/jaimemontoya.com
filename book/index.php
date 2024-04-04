<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Book reviews";
  $index->metaDescription = "Reviews for books read by Jaime Montoya from cover to cover.";
  $index->content .= "<h1>Book reviews</h1>";
  //require("book/american-prometheus/american-prometheus-book-info.php");
  $index->Display();
?>
