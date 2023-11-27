<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Changing business email service provider from InMotion Hosting to Namecheap";
  $index->parentPage = "Blog";
  $index->metaDescription = "A Black Friday Sale was the trigger for me to change business email service provider from InMotion Hosting to Namecheap.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20231125-1700.php");
  $index->Display();
?>