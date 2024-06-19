<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Atomic Habits: An Easy & Proven Way to Build Good Habits & Break Bad Ones";
  $index->metaDescription = "No matter your goals, Atomic Habits offers a proven framework for improving--every day.";
  require("atomic-habits-book-info.php");
  $index->Display();
?>