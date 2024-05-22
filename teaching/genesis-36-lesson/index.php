<?php
  require("../../page.php");
  $index = new Page();
  $index->title = "Genesis 36 lesson";
  $index->parentPage = "Teaching";
  $index->metaDescription = "In-person classes taught by Jaime Montoya.";
  require("genesis-36-lesson-book-info.php");
  require("genesis-36-lesson.php");
  $index->Display();
?>