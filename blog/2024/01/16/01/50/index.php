<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Checking versions of PHP installed on Ubuntu server";
  $index->parentPage = "Blog";
  $index->metaDescription = "This post provides a way to check if there are multiple versions of PHP installed on Ubunto, and to display the directory correspoding to each version.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20240116-0150.php");
  $index->Display();
?>