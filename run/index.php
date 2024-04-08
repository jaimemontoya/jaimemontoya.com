<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Running";
  $index->metaDescription = "Jaime Montoya's running history since August 2, 2020.";
  $index->content .= "<h1>Running</h1>";
  require("all/all-book-info.php");
  $index->Display();
?>
