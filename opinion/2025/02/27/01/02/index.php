<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Nightmare for Tesla. TSMC richer than Tesla. Aramco performing better than all Magnificent 7 stocks. Musk lost $15.6 billion. Buffett having a great week for his net worth. Bezos richer than Zuckerberg.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Saudi Aramco had a positive stock price growth of 0.74% on Tuesday, better than all Magnificent 7 stocks (Apple, Microsoft, Amazon, Alphabet, Meta, Nvidia, and Tesla).";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250226-0333.php");
  $index->Display();
?>