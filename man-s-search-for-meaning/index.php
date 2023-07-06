<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Man's Search for Meaning";
  $index->metaDescription = "Internationally renowned psychiatrist, Viktor E. Frankl, endured years of unspeakable horror in Nazi death camps.";
  require("man-s-search-for-meaning-book-info.php");
  $index->Display();
?>