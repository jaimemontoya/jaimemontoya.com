<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Another bad day in the stock market";
  $index->parentPage = "Blog";
  $index->metaDescription = "Another bad day in the stock market. Weak performance to finish the year.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20241230-2147.php");
  $index->Display();
?>