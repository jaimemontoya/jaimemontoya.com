<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Jaime Montoya's blog";
  $index->metaDescription = "Welcome to my blog, where you will find information about jaimemontoya.com and updates related to the content of this website.";
  require("2023/09/21/18/59/blog-info-20230921-1859.php");
  require("2023/09/21/18/09/blog-info-20230921-1809.php");
  $index->Display();
?>
