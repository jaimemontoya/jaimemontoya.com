<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Setting up the dark theme in SQL Server Management Studio";
  $index->parentPage = "Blog";
  $index->metaDescription = "Enable the SSMS Dark theme in SQL Server Management Studio by switching between the settings configurable from Tools | Options | Environment | General | Color theme.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20240117-0252.php");
  $index->Display();
?>