<?php
  require("../../page.php");
  $index = new Page();
  $index->title = "Book review for American Prometheus: The Inspiration for the Major Motion Picture OPPENHEIMER";
  $index->metaDescription = "In this magisterial, acclaimed biography twenty-five years in the making, Kai Bird and Martin Sherwin capture Oppenheimer’s life and times, from his early career to his central role in the Cold War.";
  require("american-prometheus-book-info.php");
  require("american-prometheus-summary-critique-review.php");
  /*require("book-reviews-bibliography.php");*/
  $index->Display();
?>