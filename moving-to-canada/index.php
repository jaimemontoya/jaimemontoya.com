<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Moving To Canada: Your First Look At Understanding The Processes For Canadian Immigration by Express Entry, PNP, AIP, RNIP and Quebec";
  $index->metaDescription = "Get to know about all the pathways to immigrate by Express Entry and the over 80 PNP options Canada has to offer you.";
  require("moving-to-canada-book-info.php");
  $index->Display();
?>