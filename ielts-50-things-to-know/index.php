<?php
  require("../page.php");
  $index = new Page();
  $index->title = "50 Things to Know About IELTS for General Training Module";
  $index->metaDescription = "50 Things to Know About IELTS for General Training Module is the ready reckoner guide by Sangy K. that offers an approach to get the highest score in the IELTS exam.";
  require("ielts-50-things-to-know-book-info.php");
  $index->Display();
?>