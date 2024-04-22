<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Provisioning Azure relational database services to create Azure SQL, MySQL, and PostgreSQL database resources";
  $index->parentPage = "Blog";
  $index->metaDescription = "Steps to provision from an Azure subscription, the following resources: Azure SQL, MySQL, and PostgreSQL databases.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20231217-1141.php");
  $index->Display();
?>