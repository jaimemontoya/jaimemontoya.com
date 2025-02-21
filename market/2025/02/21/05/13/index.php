<?php ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
  require("../../../../../../market.php");
  $market = new MarketPage();
  $market->title = "Performance comparison: Apple Vs. Global X Dow 30 Covered Call ETF (DJIA)";
  $market->parentPage = "Market";
  $market->metaDescription = "The chart illustrates the hypothetical performance of a $1,000 investment in Apple and Global X Dow 30 Covered Call ETF (DJIA).";
  $market->content .= "\t\t\t<h1>".$market->title."</h1>";
  require("chart.php");
  require("book-info-20250221-0513.php");
  $market->Display();
?>