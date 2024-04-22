<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Migrating existing database on SQL Server to Azure SQL Database using a .bacpac file";
  $index->parentPage = "Blog";
  $index->metaDescription = "This quickstart provides the steps to import an existing database on SQL Server into an Azure SQL Database using a .bacpac file.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20240422-2051.php");
  $index->Display();
?>