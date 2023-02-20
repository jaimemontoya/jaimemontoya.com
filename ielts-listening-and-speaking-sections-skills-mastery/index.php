<?php
  require("../page.php");
  $index = new Page();
  $index->title = "IELTS Listening and Speaking Sections Skills Mastery";
  $index->metaDescription = "Whether you have taken the IELTS test before, you will benefit from completing this course on the listening and speaking sections of the exam.";
  require("ielts-listening-and-speaking-sections-skills-mastery-book-info.php");
  $index->Display();
?>