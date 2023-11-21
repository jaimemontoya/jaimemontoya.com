<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "2:20 AM GMT · Nov 21, 2023";
  $index->parentPage = "Blog";
  $index->metaDescription = "Configuring Let's Encrypt for subdomain using certbot --apache.";
  require("book-info-20231121-0220.php");
  $index->Display();
?>