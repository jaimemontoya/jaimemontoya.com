<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Reading";
  $index->metaDescription = "Listing all of the books read by Jaime Montoya from cover to cover.";
  $index->content .= "<h1>Reading</h1><p>Listing all of the books I have read from cover to cover.</p>";
  require("american-prometheus/american-prometheus-book-info.php");
  $index->Display();
?>
