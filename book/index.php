<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Book reviews";
  $index->metaDescription = "Reviews for books read by Jaime Montoya from cover to cover.";
  $index->content .= "<h1>Book reviews</h1><p>Reviews for all books I have read from cover to cover.</p>";
  require("american-prometheus/american-prometheus-book-info.php");
  $index->Display();
?>
