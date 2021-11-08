<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Outliers: The Story of Success";
  $index->metaDescription = "Malcolm Gladwell's Outliers: The Story of Success overturns conventional wisdom about genius to show us what makes an ordinary person an extreme overachiever.";
  require("outliers-malcolm-gladwell-book-info.php");
  $index->Display();
?>

