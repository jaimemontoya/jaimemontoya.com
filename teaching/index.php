<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Teaching";
  $index->metaDescription = "In-person classes taught by Jaime Montoya.";
  $index->content .= "<h1>Teaching</h1><p>In-person classes I have taught.</p>";
  require("genesis-36-lesson/genesis-36-lesson-book-info.php");
  $index->Display();
?>