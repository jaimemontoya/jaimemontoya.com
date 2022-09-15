<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Authentic Faith: The Power of a Fire-Tested Life";
  $index->metaDescription = "Bestselling author Gary Thomas helps us sharpen our spiritual vision and fortify our commitment to Christ by examining ten disciplines God uses to forge a fire-tested faith.";
  require("authentic-faith-book-info.php");
  $index->Display();
?>