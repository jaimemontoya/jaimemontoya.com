<?php
  require("../page.php");
  $index = new Page();
  $index->title = "IELTS Writing Section Skills Mastery";
  $index->metaDescription = "Whether you have taken the IELTS test before, you will benefit from completing this course on the writing section of the exam. The lessons in this course will improve your overall skills in writing and prepare you for every type of writing prompt on the test, increasing your chances of getting your target band score.";
  require("ielts-writing-section-skills-mastery-book-info.php");
  $index->Display();
?>