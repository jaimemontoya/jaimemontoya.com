<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Berkshire Hathaway and Buffett experiencing a price fall on Tuesday. TSMC to invest $100 billion in the U.S. TSMC and Broadcom richer than Tesla. Finally a positive day for Larry Page in a difficult 2025.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Larry Page had a good Tuesday to make his net worth grow by $3.1 billion (2.20% increase). That was a little relief considering that his company, Alphabet, has been experiencing consistent decrease in its stock price since 5 Feb 2025 to 3 Mar 2025.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250306-1427.php");
  $index->Display();
?>