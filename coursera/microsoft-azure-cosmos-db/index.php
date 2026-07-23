<?php
  require("../../page.php");
  $index = new Page();
  $index->title = "Microsoft Azure Cosmos DB";
  $index->parentPage = "Coursera";
  $index->metaDescription = "Identify basic management tasks for non-relational data. Describe non-relational data workloads. Describe non-relational data offerings on Azure.";
  require("microsoft-azure-cosmos-db-book-info.php");
  require("microsoft-azure-cosmos-db.php");
  $index->Display();
?>