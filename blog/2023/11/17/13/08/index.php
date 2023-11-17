<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "1:08 PM GMT · Nov 17, 2023";
  $index->parentPage = "Blog";
  $index->metaDescription = "Hosting a site on a subdomain using Apache VirtualHost.";
  require("book-info-20231117-1308.php");
  $index->Display();
?>