<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Get Programming with Scala";
  $index->metaDescription = "Learn software engineering from scratch using Scala, from installing and setting up your development environment, to navigating a terminal and building a model command line operating system.";
  require("software-engineering-scratch-book-info.php");
  $index->Display();
?>

