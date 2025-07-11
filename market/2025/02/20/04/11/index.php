<?php
  require("../../../../../../market.php");
  $market = new MarketPage();
  $market->title = "Performance comparison: Apple Vs. S&P 500 (SPX) Vs. Global X Dow 30 Covered Call ETF (DJIA) Vs. NASDAQ Composite Index (COMP)";
  $market->parentPage = "Market";
  $market->metaDescription = "The chart illustrates the hypothetical performance of a $1,000 investment in Apple, S&P 500 (SPX), Global X Dow 30 Covered Call ETF (DJIA), and NASDAQ Composite Index (COMP).";
  $market->content .= "\t\t\t<h1>".$market->title."</h1>";
  require("chart.php");
  require("book-info-20250220-0411.php");
  $market->Display();
?>