<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Musk and Tesla benefiting from proximity to Trump. Tesla richer than TSMC. Amazon alarming investors in AI uncertainty for 2025. Arnault winning around $5 billion in a day. Ellison losing around $5 billion in a day.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Bernard Arnault is seeing his company LVMH recover from the stock price fall it experienced from 28 January to 5 February 2025. The results were generally flat after that, but Wednesday was a day of growth, which made Bernard’s net worth grow almost $5 billion in a day.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250213-1327.php");
  $index->Display();
?>