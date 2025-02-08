<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Nvidia no longer intimidated by DeepSeek. Amazon had a terrible Friday. Zuckerberg richer than Bezos. Ellison solidifying his position as 4th richest person. Buffett richer than Brin.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Oracle has been enjoying growth in its stock price since 28 Jan 2025, with the company almost reaching half trillion dollars in market capitalization. Larry Ellison is benefiting from those results and solidifying his position as the 4th richest person in the world.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250208-0002.php");
  $index->Display();
?>