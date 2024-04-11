<?php
  require("../../page.php");
  $index = new Page();
  $index->title = "Introduction to Marketing";
  $index->parentPage = "Coursera";
  $index->metaDescription = "Taught by three of Wharton's top faculty in the marketing department, consistently ranked as the #1 marketing department in the world, this course covers three core topics in customer loyalty: branding, customer centricity, and practical, go-to-market strategies.";
  require("introduction-to-marketing-book-info.php");
  require("introduction-to-marketing.php");
  $index->Display();
?>