<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Investment";
  $index->metaDescription = "Mutual fund and stock investments I have made since May 5, 2024.";
  $index->content .= "<h1>Investment</h1><p>Mutual fund and stock investments I have made since May 5, 2024.</p>";
  require("investment-info.php");
  $index->Display();
?>
