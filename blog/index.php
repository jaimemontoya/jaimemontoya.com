<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Blog";
  $index->metaDescription = "Welcome to my blog, where you will find information about jaimemontoya.com and updates related to the content of this website.";
  require("2023/12/10/05/59/20231210-0559-book-info.php");
  require("2023/11/29/02/48/20231129-0248-book-info.php");
  require("2023/11/25/17/00/20231125-1700-book-info.php");
  require("2023/11/25/03/19/20231125-0319-book-info.php");
  require("2023/11/21/02/20/20231121-0220-book-info.php");
  require("2023/11/17/13/08/20231117-1308-book-info.php");
  require("2023/10/30/21/58/20231030-2158-book-info.php");
  require("2023/10/17/23/21/20231017-2321-book-info.php");
  require("2023/09/24/22/57/20230924-2257-book-info.php");
  require("2023/09/21/20/04/20230921-2004-book-info.php");
  require("2023/09/21/18/09/20230921-1809-book-info.php");
  $index->Display();
?>
