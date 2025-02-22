<?php
  require("../../../../../../market.php");
  $market = new MarketPage();
  $market->title = "Performance comparison: Nvidia Vs. Global X Dow 30 Covered Call ETF (DJIA)";
  $market->parentPage = "Market";
  $market->metaDescription = "The chart illustrates the hypothetical performance of a $1,000 investment in Nvidia and Global X Dow 30 Covered Call ETF (DJIA).";
  $market->content .= "\t\t\t<h1>".$market->title."</h1>";
  require("chart.php");
  require("book-info-20250222-1820.php");
  $market->Display();
?>