<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Using Google AdSense again";
  $index->parentPage = "Blog";
  $index->metaDescription = "After a few years without ads on my website, I am running Google AdSense again.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20230924-2257.php");
  $index->Display();
?>