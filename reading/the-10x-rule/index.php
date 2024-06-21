<?php
  require("../page.php");
  $index = new Page();
  $index->title = "The Richest Man in Babylon";
  $index->metaDescription = "Beloved by millions, this timeless classic holds the key to all you desire and everything you wish to accomplish. This is the book that reveals the secret to personal wealth.";
  require("the-richest-man-in-babylon-book-info.php");
  $index->Display();
?>