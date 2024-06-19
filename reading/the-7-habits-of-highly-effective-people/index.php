<?php
  require("../page.php");
  $index = new Page();
  $index->title = "The 7 Habits of Highly Effective People: Infographics Edition: Powerful Lessons in Personal Change";
  $index->metaDescription = "The 7 Habits of Highly Effective People has captivated readers for over 30 years and sold over 40 million internationally.";
  require("the-7-habits-of-highly-effective-people-book-info.php");
  $index->Display();
?>