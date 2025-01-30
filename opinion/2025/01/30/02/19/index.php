<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Apple is strong again as number 1. Nvidia is struggling in the AI revolution.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Wednesday was a good day for Apple in the stock market where the growth was not impressive for the company, but solid enough to maintain its position as the richest company in the world. The freefall in the company’s stock price experienced since the beginning of 2025 stopped on 21 Jan 2025 to keep results flat, and the growth has started since 27 Jan 2025.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250130-0219.php");
  $index->Display();
?>