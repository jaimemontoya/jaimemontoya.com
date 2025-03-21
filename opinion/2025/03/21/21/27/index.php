<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Apple had a successful week. Nvidia in decline. Microsoft richer than Nvidia.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Apple enjoyed a successful week even in the middle of stock market uncertainty and political changes in the United States. With a share price growth of 2.33% this week, Apple is still the richest company in the world.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250321-2127.php");
  $index->Display();
?>