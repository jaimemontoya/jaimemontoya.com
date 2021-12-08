<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Get Programming with Scala";
  $index->metaDescription = "Get Programming with Scala is a fast-paced introduction to the Scala language, covering both Scala 2 and Scala 3.";
  require("get-programming-scala-book-info.php");
  $index->Display();
?>

