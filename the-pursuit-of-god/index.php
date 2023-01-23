<?php
  require("../page.php");
  $index = new Page();
  $index->title = "The Pursuit of God (Amazon Classics Edition)";
  $index->metaDescription = "A soul-searching reflection on spirituality, A. W. Tozer’s The Pursuit of God has been regarded as a classic Christian work since its publication in 1948.";
  require("the-pursuit-of-god-book-info.php");
  $index->Display();
?>