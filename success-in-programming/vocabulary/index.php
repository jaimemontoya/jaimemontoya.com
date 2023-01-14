<?php
  require("../../page.php");
  $index = new Page();
  $index->title = "About Jaime Montoya";
  $index->metaDescription = "Success in Programming: How to Gain Recognition, Power, and Influence through Personal Branding";
  require("../success-in-programming-book-info.php");
  require("vocabulary.php");
  $index->Display();
?>
