<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Apple lost almost 10% of its value in one day. Berkshire Hathaway storing another all-time high stock value. Zuckerberg apparently trying to persuade Donald Trump to settle case against Facebook. Buffett navigating the crisis in an outstanding way. Ortega richer than Ballmer.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Amancio Ortega is richer than Steve Ballmer, with Ortega moving from 10th to 9th and Ballmer the opposite, in the ranking of richest people on the planet. The way the technology sector has been affected by the current U.S. stock market conditions has contributed to making Ballmer lose large sums of money this year.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250404-0401.php");
  $index->Display();
?>