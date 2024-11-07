<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "My Interactive Brokers account was approved";
  $index->parentPage = "News";
  $index->metaDescription = "My Interactive Brokers account was approved. The next step is to fund my account, but I officially have my Interactive Brokers account approved.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20241107-0000.php");
  $index->Display();
?>