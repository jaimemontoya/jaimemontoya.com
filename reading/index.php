<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Reading";
  $index->metaDescription = "Listing all of the books read by Jaime Montoya from cover to cover.";
  $index->content .= "<h1>Reading</h1><p>Listing all of the books I have read from cover to cover.</p>";
  require("american-prometheus/american-prometheus-book-info.php");
  require("twitter-101-everything/twitter-101-everything-book-info.php");
  require("born-to-blog/born-to-blog-book-info.php");
  require("success-in-programming/success-in-programming-book-info.php");
  $index->Display();
?>
