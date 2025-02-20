<?php ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
  require("../../../../../../market.php");
  $market = new MarketPage();
  $market->title = "Performance comparison: Apple Vs. S&P 500 (SPX)";
  $market->parentPage = "Market";
  $market->metaDescription = "The chart illustrates the hypothetical performance of a $1,000 investment in Apple and S&P 500 (SPX).";
  $market->content .= "\t\t\t<h1>".$market->title."</h1>";
  require("chart.php");
  require("book-info-20250220-0411.php");
  $market->Display();
?>