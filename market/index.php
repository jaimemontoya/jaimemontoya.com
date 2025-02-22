<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Market";
  $index->metaDescription = "Jaime Montoya's monitoring tool to beat the market.";
  $index->content .= "<h1>Market</h1><p>Monitoring tool to beat the market.</p>";
  require("2025/02/22/19/27/20250222-1927-book-info.php");
  require("2025/02/22/18/20/20250222-1820-book-info.php");
  require("2025/02/22/11/00/20250222-1100-book-info.php");
  require("2025/02/21/06/10/20250221-0610-book-info.php");
  require("2025/02/21/05/13/20250221-0513-book-info.php");
  require("2025/02/20/04/11/20250220-0411-book-info.php");
  $index->Display();
?>
