<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Official IELTS Prep - Bonus Guide Included";
  $index->metaDescription = "This audio course covers everything from leading test taking skills and strategies to a high-yield review of reading, writing, listening, and speaking portions of the IELTS as well as the top 500 IELTS vocabulary words!";
  require("official-ielts-prep-bonus-guide-included-book-info.php");
  $index->Display();
?>