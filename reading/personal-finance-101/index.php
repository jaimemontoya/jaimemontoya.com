<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Personal Finance 101: From Saving and Investing to Taxes and Loans, an Essential Primer on Personal Finance (Adams 101 Series)";
  $index->metaDescription = "Get your financial life in order—from saving and investing to taxes and loans—with this comprehensive, accessible guide to everything you need to know about finance.";
  require("personal-finance-101-book-info.php");
  $index->Display();
?>