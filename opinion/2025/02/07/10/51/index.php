<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Nvidia is confident again. Tesla and Musk in a bad 2025. Meta and Zuckerberg are unstoppable. Saudi Aramco is poorer than Meta. TSMC is richer than Broadcom. Ortega is richer than Ballmer. Nvidia richer than Microsoft.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Nvidia is richer than Microsoft again. It was on 28 Jan 2025 when Microsoft became the 2nd richest company in the world, but the title only lasted a little longer than a week for Microsoft, and now Nvidia took back that position.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250207-1051.php");
  $index->Display();
?>