<?php
  require("../page.php");
  $index = new Page();
  $index->title = "NIV, Holy Bible";
  $index->metaDescription = "The New International Version (NIV) is the world’s bestselling modern-English Bible translation—accurate, readable, and clear, yet rich with the detail found in the original languages.";
  require("niv-holy-bible-book-info.php");
  $index->Display();
?>

