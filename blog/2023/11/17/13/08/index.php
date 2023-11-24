<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Apache Virtual Hosts to have two websites on the same server. Configuring subdomain.";
  $index->parentPage = "Blog";
  $index->metaDescription = "Upgrading PHP from 8.0 to 8.2 on Apache and Ubuntu with five commands.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20231117-1308.php");
  $index->Display();
?>