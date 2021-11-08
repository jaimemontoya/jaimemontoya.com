<?php
  require("../page.php");
  $index = new Page();
  $index->title = "PLACE Participant Guide and Assessment Tool";
  $index->metaDescription = "This comprehensive workbook helps participants explore their unique design and understand what God’s Word says about their PLACE in life and ministry.";
  require("place-participant-guide-book-info.php");
  $index->Display();
?>