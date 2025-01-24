<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "All-time high price for Meta stock price. Zuckerberg running for top positions in ranking of wealthiest people. Tesla with bad performance since Trump started his second term. Musk needing to has his company back on track to outstanding results.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Since 21 Jan 2025, Tesla’s stock price has been in decline. Interestingly enough, Tesla has not had one positive day for its stock price, after Donald Trump officially started his new term as President of the United States, despite the excellent relationship between Elon Musk and Trump. Musk’s fortune is still gigantic, but with Tesla having a couple of bad days in the stock market, Musk loses a couple of billions in his net worth.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250124-0443.php");
  $index->Display();
?>