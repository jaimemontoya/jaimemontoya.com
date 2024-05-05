<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Using PHP to query a database in Azure SQL Database";
  $index->parentPage = "Blog";
  $index->metaDescription = "Learn how to use PHP to connect to a database in Azure SQL Database. You can then use T-SQL statements to query data.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20240503-1618.php");
  $index->Display();
?>