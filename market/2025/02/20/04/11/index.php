<?php
  require("../../../../../../market.php");
  $market = new MarketPage();
  $market->title = "Performance comparison: Apple Vs. S&P 500 (SPX)";
  $market->parentPage = "Market";
  $market->metaDescription = "The chart illustrates the hypothetical performance of a $10,000 investment in Apple and S&P 500 (SPX).";
  $market->content .= "\t\t\t<h1>".$market->title."</h1>";
  require("book-info-20250220-0411.php");
  require("chart.php");
  $market->Display();
?>