<?php
  require("../page.php");
  $index = new Page();
  $index->title = "The Craft of Research, Third Edition";
  $index->metaDescription = "Learn about every step of the academic research process, from the “why” of research through forming the research question, formulating an argument, and revision.";
  require("the-craft-of-research-3rd-ed-book-info.php");
  $index->Display();
?>