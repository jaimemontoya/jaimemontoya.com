<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Meta and Zuckerberg losing massively in a bearish market. Berkshire Hathaway and Buffett navigating successfully the crisis. Nvidia highly volatile and winning on Thursday. Nvidia richer than Microsoft. Broadcom richer than TSMC.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "The race between Broadcom and TSMC continues, with Broadcom upgraded from 10th to 9th, and TSMC downgraded from 9th to 10th, in the ranking of richest companies in the world.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250314-0618.php");
  $index->Display();
?>