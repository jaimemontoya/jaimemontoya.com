<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Scala for the Impatient Second Edition";
  $index->metaDescription = "Written for programmers who are new to Scala or functional programming. Find key Scala concepts and techniques you need in order to be productive quickly.";
  require("scala-for-the-impatient-second-edition-book-info.php");
  $index->Display();
?>

