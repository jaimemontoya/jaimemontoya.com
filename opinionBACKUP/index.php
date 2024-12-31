<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Opinion";
  $index->metaDescription = "Stock Market, Business & Finance Opinion since 2024-Dec-30 9:47 PM GMT";
  $index->content .= "<h1>Opinion</h1><p>Stock Market, Business & Finance Opinion since 2024-Dec-30 9:47 PM GMT</p>";
  require("opinion-info.php");
  $index->Display();
?>
