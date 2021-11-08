<?php
  require("../page.php");
  $index = new Page();
  $index->title = "The Logic of God: 52 Christian Essentials for the Heart and Mind";
  $index->metaDescription = "Ravi Zacharias offers 52 readings that explain how and why Christianity, the Bible, and God are still relevant, vital, and life-changing for us today.";
  require("the-logic-of-god-book-info.php");
  $index->Display();
?>