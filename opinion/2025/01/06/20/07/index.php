<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Google richer than Amazon. Zuckerberg the third richest person. Ellison no longer in the top 3. Musk’s net worth decreased today. Nvidia almost reaching the top again. Poor performance day for Tesla. Huang at CES 2025.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Jensen Huang is in the spotlight taking center stage at CES 2025. He is a celebrity in the AI revolution and his wealth keeps growing at a rapid pace.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250106-2007.php");
  $index->Display();
?>