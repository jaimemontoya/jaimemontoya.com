<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Tesla shares are soaring. Nvidia is still in freefall. Arnault with outstanding financial results. Huang visited Taiwan.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Nvidia continues with its freefall stock price that started on January 7.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250114-1026.php");
  $index->Display();
?>