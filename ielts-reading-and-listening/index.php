<?php
  require("../page.php");
  $index = new Page();
  $index->title = "IELTS Reading and Listening - The International English Language Testing System";
  $index->metaDescription = "In this series, you will be escorted through the course with Richard Aspinall, a teacher who has a proven track record in teaching the IELTS curriculum successfully all over the world.";
  require("ielts-reading-and-listening-book-info.php");
  $index->Display();
?>