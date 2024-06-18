<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Google Speaks: Secrets of the World's Greatest Billionaire Entrepreneurs, Sergey Brin and Larry Page";
  $index->metaDescription = "This book describes how Google's founders, Sergey Brin and Larry Page, transformed their vision of a better search engine into a business colossus.";
  require("google-speaks-secrets-book-info.php");
  $index->Display();
?>