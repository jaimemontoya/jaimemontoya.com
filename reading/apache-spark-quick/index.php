<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Apache Spark Quick Start Guide: Quickly learn the art of writing efficient big data applications with Apache Spark";
  $index->metaDescription = "Master writing efficient big data applications. Solve complex data processing challenges by applying the best optimizations techniques in Apache Spark.";
  require("apache-spark-quick-book-info.php");
  $index->Display();
?>

