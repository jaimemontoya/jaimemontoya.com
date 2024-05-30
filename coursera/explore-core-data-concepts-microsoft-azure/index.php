<?php
  require("../../page.php");
  $index = new Page();
  $index->title = "Explore Core Data Concepts in Microsoft Azure";
  $index->parentPage = "Coursera";
  $index->metaDescription = "In this course, you will learn the fundamentals of database concepts in a cloud environment, get basic skilling in cloud data services, and build your foundational knowledge of cloud data services within Microsoft Azure.";
  require("explore-core-data-concepts-microsoft-azure-book-info.php");
  require("explore-core-data-concepts-microsoft-azure.php");
  $index->Display();
?>