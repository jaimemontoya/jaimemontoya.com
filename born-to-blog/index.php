<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Born to Blog: Building Your Blog for Personal and Business Success One Post at a Time";
  $index->metaDescription = "Born to Blog is filled with practical techniques and ideas to attract a loyal following, promote your blog, and write powerful content.";
  require("born-to-blog-book-info.php");
  $index->Display();
?>