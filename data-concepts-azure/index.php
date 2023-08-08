<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Explore Core Data Concepts in Microsoft Azure";
  $index->metaDescription = "Describe core data concepts. Identify how data is defined and stored. Describe data job roles. Describe and differentiate batch and streaming data. Identify characteristics of relational and non-relational data.";
  require("data-concepts-azure-book-info.php");
  $index->Display();
?>