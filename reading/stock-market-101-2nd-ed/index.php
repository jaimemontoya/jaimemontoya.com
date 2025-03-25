<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Stock Market 101, 2nd Edition: From Bull and Bear Markets to Dividends, Shares, and Margins―Your Essential Guide to the Stock Market (Adams 101 Series)";
  $index->metaDescription = "Whether you’re looking to master the major principles of stock market investing or just want to learn more about how the market shifts over time, Stock Market 101, 2nd Edition has all the answers—even the ones you didn’t know you were looking for.";
  require("stock-market-101-2nd-ed-book-info.php");
  $index->Display();
?>