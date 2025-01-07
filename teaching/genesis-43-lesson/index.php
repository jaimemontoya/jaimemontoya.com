<?php
  require("../../page.php");
  $index = new Page();
  $index->title = "Genesis 43 lesson";
  $index->parentPage = "Teaching";
  $index->metaDescription = "In-person classes taught by Jaime Montoya.";
  require("genesis-43-lesson-book-info.php");
  require("genesis-43-lesson.php");
  $index->Display();
?>