<?php
  require("../../page.php");
  $index = new Page();
  $index->title = "Modern Data Warehouse Analytics in Microsoft Azure";
  $index->parentPage = "Coursera";
  $index->metaDescription = "Examine the components of a modern data warehouse. Understand the role of services like Azure Databricks, Azure Synapse Analytics, and Azure HDInsight. See how to use Azure Synapse Analytics to load and process data. Explore the different data ingestion options available when building a data warehouse, and see how to use Azure Data Factory to ingest data. Explore Azure services for performing data analytics.";
  require("modern-data-warehouse-analytics-microsoft-azure-book-info.php");
  require("modern-data-warehouse-analytics-microsoft-azure.php");
  $index->Display();
?>