<?php
  require("../page.php");
  $index = new Page();
  $index->title = "The Holy Bible, English Standard Version";
  $index->metaDescription = "The English Standard Version (ESV) is an English translation of the Bible. The ESV was published in 2001 by Crossway, having been \"created by a team of more than 100 leading evangelical scholars and pastors."";
  require("the-holy-bible-esv-book-info.php");
  $index->Display();
?>