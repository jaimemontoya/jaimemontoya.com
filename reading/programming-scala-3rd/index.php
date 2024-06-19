<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Programming Scala, 3rd Edition";
  $index->metaDescription = "Get up to speed on Scala--the JVM, JavaScript, and natively compiled language that offers all the benefits of functional programming, a modern object model, and an advanced type system.";
  require("programming-scala-3rd-book-info.php");
  $index->Display();
?>

