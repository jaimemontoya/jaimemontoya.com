<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Stock Investing For Dummies";
  $index->metaDescription = "The bestselling Stock Investing For Dummies is full of practical and realistic stock market guidance.";
  require("stock-investing-for-dummies-book-info.php");
  $index->Display();
?>