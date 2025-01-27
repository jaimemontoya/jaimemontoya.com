<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "First bad day of the week for Nvidia. Broadcom growing consistently.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Broadcom finished the week on Friday with strong results in the stock market, maintaining its consistency of growth in the era of the boom in artificial intelligence technologies.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250126-1335.php");
  $index->Display();
?>