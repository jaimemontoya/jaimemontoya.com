<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "My first blog entry";
  $index->parentPage = "Blog";
  $index->metaDescription = "Hello, World!";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20230921-1809.php");
  $index->Display();
?>