<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Provisioning Azure relational database services to create an Azure SQL Database resource";
  $index->parentPage = "Blog";
  $index->metaDescription = "Example of steps to provision from an Azure subscription, an Azure SQL Database resource that is queried using SQL.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20231217-1141.php");
  $index->Display();
?>