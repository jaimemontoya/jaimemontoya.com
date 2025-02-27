<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "The freefall for Broadcom ended. Apple had a weak Wednesday. Broadcom richer than Tesla. Boycott against Musk and Tesla. Zuckerberg richer than Bezos.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Apple interrupted on Wednesday its consistent stock price growth that had started on 11 Feb 2025. That caused Apple to have a negative 2025 balance, with a decrease of 1.43% this year.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250227-0102.php");
  $index->Display();
?>