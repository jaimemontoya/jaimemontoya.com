<?php
  require("../page.php");
  $index = new Page();
  $index->title = "The Intelligent Investor Third Edition: The Timeless Guide to Value Investing and Financial Wisdom for a Volatile Market";
  $index->metaDescription = "The classic work on investing, filled with sound and safe principles that are as reliable as ever, now revised with an introduction and appendix by financial legend Warren Buffett—one of the author’s most famous students—and newly updated commentaries on each chapter from distinguished Wall Street Journal writer Jason Zweig.";
  require("intelligent-investor-benjamin-graham-book-info.php");
  $index->Display();
?>