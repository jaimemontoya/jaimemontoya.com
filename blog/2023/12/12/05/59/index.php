<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Removing duplicates using Fuzzy Grouping in SQL Server Integration Services plus fixing spelling errors and converting abbreviations to full job title names";
  $index->parentPage = "Blog";
  $index->metaDescription = "Practical example of the use of Fuzzy Grouping in SQL Server Integration Services to remove duplicates. This implementation also fixes spelling errors and performs a conversion of the job tables that were abbreviated into non-abbreviated job title names.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20231212-0559.php");
  $index->Display();
?>