<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Changing domain name registrar from Turbify to Namecheap";
  $index->parentPage = "Blog";
  $index->metaDescription = "Yahoo Small Business became Verizon's Small Business Essentials. Finally, it was rebranded as Turbify. I decided to change domain name registrar from Turbify to Namecheap.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20231129-0248.php");
  $index->Display();
?>