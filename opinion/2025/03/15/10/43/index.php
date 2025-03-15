<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Nvidia rebounded on Friday. Saudi Aramco in consistent decline. Zuckerber’s fortune is not in decline anymore. Arnault losing money in freefall mode.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "The stock market rebounded on Friday. The AI demand is helping Nvidia to maintain its position as the second richest company in the world, only behind Apple.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250315-1043.php");
  $index->Display();
?>