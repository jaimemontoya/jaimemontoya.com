<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Configuring subdomains and Apache Virtual Hosts for multiple websites on the same server";
  $index->parentPage = "Blog";
  $index->metaDescription = "Hosting multiple websites on the same server using Apache Virtual Hosts. Configuring subdomains to host different websites stored on separate folders.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20231117-1308.php");
  $index->Display();
?>