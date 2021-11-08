<?php
  require("../page.php");
  $index = new Page();
  $index->title = "A / B Testing: The Most Powerful Way to Turn Clicks Into Customers";
  $index->metaDescription = "Deliver a better user experience through A/B testing. Test different versions of a web page and measure the effect each version has on visitors.";
  require("ab-testing-the-book-info.php");
  $index->Display();
?>