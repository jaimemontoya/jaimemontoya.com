<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Apple surviving the crisis. Tesla falling again. TSMC richer than Tesla. Buffet enjoying a great 2025. Arnault in alarming freefall. Ortega richer than Ballmer.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Bernard Arnault is in a freefall trajectory of massive losses for his net worth. This negative path started on 28 Jan 2025 and it has not stopped yet.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250401-0351.php");
  $index->Display();
?>