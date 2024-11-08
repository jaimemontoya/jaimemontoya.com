<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Amplified Bible";
  $index->metaDescription = "When Your Knowledge of the Original Languages of the Bible Is Limited and You Don't Want to Lose Anything in the Translation If you want to get all the rich nuances and shades of meaning of the original Bible languages, the Amplified Bible is for you.";
  require("amplified-bible-book-info.php");
  $index->Display();
?>