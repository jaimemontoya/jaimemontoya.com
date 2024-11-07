<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Blog";
  $index->metaDescription = "Personal news since November 7, 2024, 00:00 AM GMT.";
  $index->content .= "<h1>News</h1><p>Personal news since November 7, 2024, 00:00 AM GMT.</p>";
  require("2024/11/07/00/00/20241107-0000-book-info.php");
  $index->Display();
?>
