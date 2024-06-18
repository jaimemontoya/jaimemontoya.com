<?php
  require("../page.php");
  $index = new Page();
  $index->title = "The Power of Habit: Why We Do What We Do in Life and Business";
  $index->metaDescription = "Award-winning New York Times Charles Duhigg takes us to the edge of scientific discoveries that explain why habits exist and how they can be changed.";
  require("the-power-of-habit-book-info.php");
  $index->Display();
?>