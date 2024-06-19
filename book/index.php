<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Book reviews";
  $index->metaDescription = "Reviews for books read by Jaime Montoya from cover to cover.";
  $index->content .= "<h1>Book reviews</h1><p>My reviews for some of the books I have read from cover to cover.</p>";
  require("american-prometheus/american-prometheus-book-info.php");
  require("the-pilgrim-s-progress/the-pilgrim-s-progress-book-info.php");
  $index->Display();
?>
