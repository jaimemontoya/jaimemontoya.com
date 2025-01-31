<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Microsoft with disappointing Azure cloud revenue results. Broadcom back on track to growth. Google richer than Amazon again. Ellison had a great day of growth. Ortega richer than Ballmer.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Microsoft's Q2 earnings report resulted in its stock suffering a fall, with the Microsoft Azure cloud revenue missing expectations.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250131-0118.php");
  $index->Display();
?>