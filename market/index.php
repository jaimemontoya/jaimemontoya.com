<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Market";
  $index->metaDescription = "Jaime Montoya's monitoring tool to beat the market.";
  $index->content .= "<h1>Market</h1><p>Monitoring tool to beat the market.</p>";
  require("2025/02/20/04/11/20250220-0411-book-info.php");
  $index->Display();
?>
