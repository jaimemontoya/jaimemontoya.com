<?php
  require("../page.php");
  $index = new Page();
  $index->title = "It Starts With Passion: Do What You Love and Love What You Do";
  $index->metaDescription = "It Starts with Passion will help you ignite the purpose in your life, as well as in the lives of your colleagues, employees, and associates.";
  require("it-starts-with-passion-book-info.php");
  $index->Display();
?>