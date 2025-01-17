<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Apple experiencing sales stagnation. Hathaway is a trillion dollar company. Arnault having a positive 2025. Huang no longer in the path of growth of 2024.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "For Jensen Huang, 2025 is not looking bright as his company does not seem to be in the unstoppable patch of continuous growth of 2024.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250118-0509.php");
  $index->Display();
?>