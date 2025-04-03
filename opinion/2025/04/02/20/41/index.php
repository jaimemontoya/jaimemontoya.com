<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Tesla enjoying a great Wednesday. Meta in negative territory. Tesla richer than TSMC. Ellison possibly a didder for TikTok. Zuckerberg trying to resolve legal cases against his company. Ballmer richer than Ortega.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Steve Ballmer is richer than Amancio Ortega, swapping spots with Baller moving to 9th, and Ortega to 10th richest person in the world.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250402-2041.php");
  $index->Display();
?>