<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Fire in the Valley: The Birth and Death of the Personal Computer. Third Edition.";
  $index->metaDescription = "Fire in the Valley is the definitive history of the personal computer, drawn from interviews with the people who made it happen, written by two veteran computer writers who were there from the start.";
  require("fire-in-the-valley-book-info.php");
  $index->Display();
?>