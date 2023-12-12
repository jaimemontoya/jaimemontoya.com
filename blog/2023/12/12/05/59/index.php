<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Removing duplicates using Fuzzy Grouping in SQL Server Integration Services";
  $index->parentPage = "Blog";
  $index->metaDescription = "Practical example of the use of Fuzzy Grouping in SQL Server Integration Services to remove duplicates from a TXT file of 22 rows that resulted in an output of 6 rows without duplicates.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20231212-0559.php");
  $index->Display();
?>