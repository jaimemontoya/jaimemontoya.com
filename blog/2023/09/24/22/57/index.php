<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Using Google AdSense again";
  $index->parentPage = "Blog";
  $index->metaDescription = "After a few years without ads on my website, I am running Google AdSense again.";
  require("book-info-20230924-2257.php");
  $index->Display();
?>