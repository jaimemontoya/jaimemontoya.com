<?php
  require("../page.php");
  $index = new Page();
  $index->title = "The Pilgrim's Progress: A Readable Modern-Day Version of John Bunyan’s Pilgrim’s Progress";
  $index->metaDescription = "The story chronicles the epic adventure of a man named Christian who leaves his home in the City of Destruction and begins a life-long quest to the Celestial City.";
  require("the-pilgrim-s-progress-book-info.php");
  require("the-pilgrim-s-progress-summary-critique-review.php");
  require("book-reviews-bibliography.php");
  $index->Display();
?>