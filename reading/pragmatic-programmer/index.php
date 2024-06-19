<?php
  require("../page.php");
  $index = new Page();
  $index->title = "The Pragmatic Programmer: Your Journey To Mastery, 20th Anniversary Edition (2nd Edition)";
  $index->metaDescription = "Topics range from personal responsibility and career development to architectural techniques for keeping your code flexible and easy to adapt and reuse.";
  require("pragmatic-programmer-book-info.php");
  $index->Display();
?>