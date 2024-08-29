<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Alpha and Omega";
  $index->metaDescription = "My official statement of faith since 10:40 PM August 29, 2024 GMT.";
  $index->content .= "<h1>Alpha and Omega</h1><p>My official statement of faith since 10:40 PM August 29, 2024 GMT.</p>";
  require("alpha-and-omega-info.php");
  $index->Display();
?>
