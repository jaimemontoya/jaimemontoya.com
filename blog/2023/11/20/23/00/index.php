<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "11:00 PM GMT · Nov 20, 2023";
  $index->parentPage = "Blog";
  $index->metaDescription = "Configuring Let's Encrypt for subdomain using certbot --apache.";
  require("book-info-20231120-2300.php");
  $index->Display();
?>