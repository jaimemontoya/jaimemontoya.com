<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Performance comparison: Apple Vs. S&P 500 (SPX)";
  $index->parentPage = "Market";
  $index->metaDescription = "The chart illustrates the hypothetical performance of a $10,000 investment in Apple and S&P 500 (SPX).";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250220-0411.php");
  $index->Display();
?>