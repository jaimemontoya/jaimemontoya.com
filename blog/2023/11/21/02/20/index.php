<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Obtaining and installing HTTPS/TLS/SSL certificates using Certbot";
  $index->parentPage = "Blog";
  $index->metaDescription = "Using certbot --apache to activate HTTPS. Certbot takes care of obtaining and installing HTTPS/TLS/SSL certificates automatically.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20231121-0220.php");
  $index->Display();
?>