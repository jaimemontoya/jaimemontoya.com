<?php
  require("../page.php");
  $index = new Page();
  $index->title = "The Accidental Billionaires: The Founding of Facebook: A Tale of Sex, Money, Genius and Betrayal";
  $index->metaDescription = "Zuckerberg hacked into Harvard’s computers, crashed the campus network, almost got himself expelled, and was inspired to create Facebook, the social networking site that has since revolutionized communication around the world.";
  require("the-accidental-billionaires-book-info.php");
  $index->Display();
?>