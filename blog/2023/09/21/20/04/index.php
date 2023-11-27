<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "jaimemontoya.com full source code available on GitHub";
  $index->parentPage = "Blog";
  $index->metaDescription = "Feel free to find, download and/or use the source code of jaimemontoya.com, available on GitHub.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20230921-2004.php");
  $index->Display();
?>