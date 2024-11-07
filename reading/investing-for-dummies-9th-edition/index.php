<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Investing For Dummies: 9th Edition";
  $index->metaDescription = "This updated, bestselling guide educates you on investing concepts and lingo so you can make the best decisions in all economies and markets.";
  require("investing-for-dummies-9th-edition-book-info.php");
  $index->Display();
?>