<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "First entry of my blog";
  $index->parentPage = "Blog";
  $index->metaDescription = "Hello, World!";
  require("book-info-20230921-1809-part1of2.php");
  $index->content .= $index->title;
  require("book-info-20230921-1809-part2of2.php");

  
  
  $index->Display();
?>