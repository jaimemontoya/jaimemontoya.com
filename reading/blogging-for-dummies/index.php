<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Blogging For Dummiess. 7th Edition";
  $index->metaDescription = "Ready to make your mark on the online world? Start a blog! Blogging For Dummies provides you with information on blogging basics, the anatomy of a good blog, and the tools required to get started.";
  require("blogging-for-dummies-book-info.php");
  $index->Display();
?>