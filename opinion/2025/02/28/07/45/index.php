<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Berkshire Hathaway and Buffett are having an outstanding 2025. Nvidia disappointing investors. Ellison is suffering the 2025 fall of the tech sector stock.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "The year to date growth for Berkshire Hathaway is 11.37% for its stock price. Warren Buffett increased his net worth by 1.66% on Thursday, resulting in $2.6 billion for his fortune. His company is having a solid and successful 2025.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250228-0745.php");
  $index->Display();
?>