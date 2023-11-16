<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "5:00 AM GMT · Nov 16, 2023";
  $index->parentPage = "Blog";
  $index->metaDescription = "Hosting a site on a subdomain by using VirtualHost from Apache.";
  require("book-info-20231116-0500.php");
  $index->Display();
?>