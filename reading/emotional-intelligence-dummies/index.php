<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Emotional Intelligence For Dummies";
  $index->metaDescription = "Emotional Intelligence For Dummies will show you how to take control of your emotions rather than letting your emotions control you!";
  require("emotional-intelligence-dummies-book-info.php");
  $index->Display();
?>