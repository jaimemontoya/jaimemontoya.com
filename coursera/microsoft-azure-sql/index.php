<?php
  require("../../page.php");
  $index = new Page();
  $index->title = "Microsoft Azure SQL";
  $index->parentPage = "Coursera";
  $index->metaDescription = "In this course, you will learn the fundamentals of database concepts in a cloud environment, get basic skilling in cloud data services, and build your foundational knowledge of cloud data services within Microsoft Azure. ";
  require("microsoft-azure-sql-book-info.php");
  require("microsoft-azure-sql.php");
  $index->Display();
?>