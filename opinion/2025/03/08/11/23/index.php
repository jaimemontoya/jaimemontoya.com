<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Outstanding Friday for AVGO. Alarming last 365 days performance for Saudi Aramco. Positive March for Alphabet. Alphabet richer than Amazon. Broadcom richer than Tesla. Arnault suffering a net worth freefall in March. Ellison finally interrupting on Friday his negative net worth trajectory.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Friday was not a good day for Bernard Arnault’s net worth, when he lost $4.9 billion. Since the beginning of March 2025, his company LVMH has been in a freefall trajectory.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250308-1123.php");
  $index->Display();
?>