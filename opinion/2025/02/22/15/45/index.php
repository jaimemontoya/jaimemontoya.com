<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Tesla continues in a negative trajectory. Saudi Aramco protected from U.S. market price decreases. Berkshire Hathaway richer than Broadcom. TSMC richer than Broadcom. Ellison suffering net worth losses again. Arnault benefiting from less exposure to U.S. stock market. Buffett richer than Page.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Bernard Arnault’s fortune had positive results, probably benefiting by being less exposed to U.S. stock market bearish Friday.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250222-1545.php");
  $index->Display();
?>