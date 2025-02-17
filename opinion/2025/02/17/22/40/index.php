<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Nvidia has a much better trailing P/E ratio than Broadcom.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Broadcom has a sky-high trailing P/E ratio of 180.65. Nvidia’s trailing P/E ratio is already elevated: 54.82. When comparing and contrasting the two companies, specifically using the price-to-earnings (P/E) ratio measure, Nvidia is on paper the winner. Nonetheless, there are many elements to consider other than the P/E ratio, and the AI wave and revolution is highly unpredictable and volatile.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250217-2240.php");
  $index->Display();
?>