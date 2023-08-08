<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Time (magazine). July 3, 2023";
  $index->metaDescription = "This week happens to mark my 10th year at TIME. That anniversary arriving at the same time as TIME100 Companies reminds me how businesses don’t change just the world but also the people who work at them. A lot has evolved in the past 10 years, and even more across TIME’s 100-year history.";
  require("fp-magazine-summer-2023-book-info.php");
  $index->Display();
?>