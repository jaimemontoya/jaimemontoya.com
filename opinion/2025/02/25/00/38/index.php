<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Berkshire Hathaway is richer than Tesla. Historically great results for Berkshire Hathaway. Buffett increased his net worth by $5.9 billion. Tesla continues with its poor 2025 performance. TSMC richer than Broadcom. Zuckerberg lost $5.3 billion on Monday.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Tesla has a -12.85% stock price performance in 2025. That is bad news for the company that became, on Monday, poorer than Berkshire Hathaway.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250225-0038.php");
  $index->Display();
?>