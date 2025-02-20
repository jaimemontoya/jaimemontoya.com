<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Tesla is stable again. Meta received bad news: European Union regulations for WhatsApp. Saudi Aramco richer than Meta. Berkshire Hathaway richer than TSMC. Great Wednesday for Ellison. Ortega experienced losses as Inditex had a poor Wednesday.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Larry Ellison increased his net worth by $2.1 billion on Wednesday. His company, Oracle, is having a great 2025. Specifically from 28 Jan 2025, the stock price for Oracle has been in a pattern of growth. The company remains with a market capitalization value higher than $0.5 trillion.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250220-0111.php");
  $index->Display();
?>