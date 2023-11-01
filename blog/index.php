<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Blog";
  $index->metaDescription = "Welcome to my blog, where you will find information about jaimemontoya.com and updates related to the content of this website.";
  require("2023/10/30/21/58/book-info-20231030-2158.php");
  require("2023/10/17/23/21/book-info-20231017-2321.php");
  require("2023/09/24/22/57/book-info-20230924-2257.php");
  require("2023/09/24/05/00/book-info-20230924-0500.php");
  require("2023/09/21/20/04/book-info-20230921-2004.php");
  require("2023/09/21/18/09/book-info-20230921-1809.php");
  $index->Display();
?>
