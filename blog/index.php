<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Jaime Montoya's blog";
  $index->metaDescription = "Welcome to my blog, where you will find information about jaimemontoya.com and updates related to the content of this website.";
  require("blog-info-20230921-1600.php");
  require("blog-info-20230921-1550.php");
  $index->Display();
?>
