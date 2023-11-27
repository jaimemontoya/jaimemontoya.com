<?php
  require("../page.php");
  $index = new Page();
  $index->title = "12 Rules for Life: An Antidote to Chaos - Book review";
  $index->metaDescription = "Dr. Peterson journeys broadly, discussing discipline, freedom, adventure and responsibility, distilling the world's wisdom into 12 practical and profound rules for life.";
  require("12-rules-for-life-book-info.php");
  require("12-rules-for-life-summary-critique-review.php");
  require("book-reviews-bibliography.php");
  $index->Display();
?>