<?php
  require("../../page.php");
  $index = new Page();
  $index->title = "Genesis 38 lesson";
  $index->parentPage = "Teaching";
  $index->metaDescription = "In-person classes taught by Jaime Montoya.";
  require("genesis-38-lesson-book-info.php");
  require("genesis-38-lesson.php");
  $index->Display();
?>