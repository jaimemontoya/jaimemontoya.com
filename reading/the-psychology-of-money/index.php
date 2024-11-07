<?php
  require("../page.php");
  $index = new Page();
  $index->title = "The Psychology of Money: Timeless lessons on wealth, greed, and happiness";
  $index->metaDescription = "In The Psychology of Money, award-winning author Morgan Housel shares 19 short stories exploring the strange ways people think about money and teaches you how to make better sense of one of life's most important topics.";
  require("the-psychology-of-money-book-info.php");
  $index->Display();
?>