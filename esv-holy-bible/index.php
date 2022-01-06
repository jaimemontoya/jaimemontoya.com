<?php
  require("../page.php");
  $index = new Page();
  $index->title = "The Holy Bible: English Standard Version";
  $index->metaDescription = "As an \"essentially literal\" translation of the Bible in contemporary English, the ESV Bible emphasizes \"word-for-word\" accuracy, literary excellence, and depth of meaning.";
  require("esv-holy-bible-book-info.php");
  $index->Display();
?>

