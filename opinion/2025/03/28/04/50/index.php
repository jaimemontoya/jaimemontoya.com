<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Apple managing to remain number one. Tesla richer than TSMC. TSMC suffering a challenging 2025. Buffett enjoying a great 2025 during times of global financial crisis. Page losing money this year.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "TSMC is yet another company struggling to have share price growth in 2025. The decline in recent days has been enough to allow Tesla to become richer than TSMC. Tesla is now the 9th richest company in the world, being upgraded one spot, while TSMC was downgraded from the 9th to the 10th place.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250328-0450.php");
  $index->Display();
?>