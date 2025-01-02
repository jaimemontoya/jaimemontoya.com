<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Amazon richer than Google again. Meta’s 70% stock surge in 2024. Tesla losing traction. Musk in volatile environment. Huang benefiting from AI hype.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Jensen Huang keeps making his net worth grow steadily alongside the AI hype that is not likely to stop in 2025.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250102-1602.php");
  $index->Display();
?>