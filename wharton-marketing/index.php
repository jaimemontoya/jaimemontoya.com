<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Introduction to Marketing";
  $index->metaDescription = "Taught by three of Wharton's top faculty in the marketing department, this course covers branding, customer centricity, and go-to-market strategies.";
  require("wharton-marketing-book-info.php");
  $index->Display();
?>