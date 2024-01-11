<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Connecting to an Azure Database for PostgreSQL server with psql";
  $index->parentPage = "Blog";
  $index->metaDescription = "This quickstart shows how to connect to a server that runs an Azure Database for PostgreSQL, using psql, a popular PostgreSQL client.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20240111-0615.php");
  $index->Display();
?>