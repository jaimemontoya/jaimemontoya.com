<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Connecting to an Azure Database for MySQL server with Azure Client Shell";
  $index->parentPage = "Blog";
  $index->metaDescription = "This quickstart shows how to connect to a server that runs an Azure Database for MySQL, using Azure Client Shell (an interactive, authenticated, browser-accessible terminal for managing Azure resources).";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20240112-0649.php");
  $index->Display();
?>