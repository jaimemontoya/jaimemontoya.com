<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Apple in an alarming free fall. Broadcom enjoying an excellent week. Microsoft richer than Apple. Broadcom richer than TSMC and Tesla. TSMC richer than Tesla. Ortega had a positive Tuesday. Bezos in net worth decline. Ortega richer than Ballmer.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Amancio Ortega is richer than Steve Ballmer, with the billionaires swapping positions from 10th to 9th and vice versa.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250409-0448.php");
  $index->Display();
?>