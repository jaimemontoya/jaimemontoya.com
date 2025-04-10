<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Market";
  $index->metaDescription = "Jaime Montoya's monitoring tool to beat the market.";
  $index->content .= "<h1>Market</h1><p>Monitoring tool to beat the market.</p>";
  require("2025/04/10/20/05/20250410-2005-book-info.php");
  require("2025/04/02/01/34/20250402-0134-book-info.php");
  require("2025/02/20/04/11/20250220-0411-book-info.php");
  $index->Display();
?>
