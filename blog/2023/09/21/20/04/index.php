<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "jaimemontoya.com full source code at https://github.com/jaimemontoya/jaimemontoya.com";
  $index->parentPage = "Blog";
  $index->metaDescription = "The full source code of jaimemontoya.com is available at https://github.com/jaimemontoya/jaimemontoya.com/.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20230921-2004.php");
  $index->Display();
?>