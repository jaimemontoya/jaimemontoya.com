<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Mere Christianity (C.S. Lewis Signature Classics)";
  $index->metaDescription = "In the classic Mere Christianity, C.S. Lewis, the most important writer of the 20th century, explores the common ground upon which all of those of Christian faith stand together.";
  require("mere-christianity-book-info.php");
  $index->Display();
?>