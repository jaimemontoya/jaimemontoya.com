<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Tesla and Musk starting to recover from bad season. TSMC threatened by potential tariffs. Tesla richer than Broadcom. Ortega having a flat wealth growth. R. Walton richer than Ballmer.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Amancio Ortega’s net worth did not grow at the same rate as other top American billionaires in his league. But his company, Inditex, is still having a solid 2025 in the stock market.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250214-0515.php");
  $index->Display();
?>