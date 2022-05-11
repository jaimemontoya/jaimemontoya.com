<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Scala Design Patterns - Second Edition";
  $index->metaDescription = "If you want to increase your understanding of Scala and apply design patterns to real-life application development, then this book is for you.";
  require("scala-design-patterns-book-info.php");
  $index->Display();
?>