<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Official IELTS Prep - Listening Strategies";
  $index->metaDescription = "This powerful audio course was created by expert IELTS tutors and teachers who know the test and all its variations inside and out.";
  require("official-ielts-prep-book-info.php");
  $index->Display();
?>