<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Apple continues to fall. Tesla bounces back. Amazon wealthier than Alphabet. Huang wealthier than Ballmer. Arnault the biggest billionaire loser of 2024 and starting 2025 in bad shape.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Bernard Arnault was the biggest billionaire loser of 2024, and 2025 has not started well for him. At this pace he may soon lose his position as the fifth richest man in the world.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250104-0125.php");
  $index->Display();
?>