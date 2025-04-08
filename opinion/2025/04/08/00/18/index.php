<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Devastating days for Apple. High volatility for Nvidia. TSMC richer than Tesla. Arnault in steady trajectory of fortune decline. Zuckerberg finally having a good day for his net worth. Ballmer richer than Ortega.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Volatility continues for Nvidia, and Monday was a good day for the company in the stock market.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250408-0018.php");
  $index->Display();
?>