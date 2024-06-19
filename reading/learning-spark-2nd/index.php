<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Learning Spark, 2nd Edition";
  $index->metaDescription = "Master writing efficient big data applications. Solve complex data processing challenges by applying the best optimizations techniques in Apache Spark.";
  require("learning-spark-2nd-book-info.php");
  $index->Display();
?>

