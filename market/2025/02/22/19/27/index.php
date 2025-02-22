<?php
  require("../../../../../../market.php");
  $market = new MarketPage();
  $market->title = "Performance comparison: Nvidia Vs. S&P 500 (SPX)";
  $market->parentPage = "Market";
  $market->metaDescription = "The chart illustrates the hypothetical performance of a $1,000 investment in Nvidia and S&P 500 (SPX).";
  $market->content .= "\t\t\t<h1>".$market->title."</h1>";
  require("chart.php");
  require("book-info-20250222-1927.php");
  $market->Display();
?>