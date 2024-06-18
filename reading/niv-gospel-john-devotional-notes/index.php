<?php
  require("../page.php");
  $index = new Page();
  $index->title = "NIV, Gospel of John, eBook: With Devotional Notes";
  $index->metaDescription = "John's Gospel sheds a unique light not only on the ministry of Jesus Christ, but also on the nature of his relationship with God the Father.";
  require("niv-gospel-john-devotional-notes-book-info.php");
  $index->Display();
?>