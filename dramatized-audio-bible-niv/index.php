<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Dramatized Audio Bible - New International Version, NIV: Complete Bible";
  $index->metaDescription = "This dramatized audio version of the complete Bible in the NIV brings the Bible to life with this true-to-text dramatization of God's word.";
  require("dramatized-audio-bible-niv-book-info.php");
  $index->Display();
?>