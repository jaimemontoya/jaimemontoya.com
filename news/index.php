<?php
  require("../page.php");
  $index = new Page();
  $index->title = "News";
  $index->metaDescription = "Personal news since November 7, 2024, 00:00 AM GMT.";
  $index->content .= "<h1>News</h1><p>Personal news since November 7, 2024, 00:00 AM GMT.</p>";
  require("2025/04/25/14/56/20250425-1456-book-info.php");
  require("2024/11/13/22/39/20241113-2239-book-info.php");
  require("2024/11/11/22/13/20241111-2213-book-info.php");
  require("2024/11/07/00/00/20241107-0000-book-info.php");
  $index->Display();
?>
