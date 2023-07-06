<?php
  require("../page.php");
  $index = new Page();
  $index->title = "The 5 Love Languages: The Secret to Love that Lasts";
  $index->metaDescription = "Discover the secret that has transformed millions of relationships worldwide. Whether your relationship is flourishing or failing, Dr. Gary Chapman's proven approach to showing and receiving love will help you experience deeper and richer levels of intimacy with your partner.";
  require("the-5-love-languages-book-info.php");
  $index->Display();
?>