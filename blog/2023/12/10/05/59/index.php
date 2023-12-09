<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Migrating WordPress website from InMotion Hosting to DigitalOcean";
  $index->parentPage = "Blog";
  $index->metaDescription = "Step-by-step explanation of process followed to migrate unionchurchss.org website from InMotion Hosting to DigitalOcean, including DNS Records modifications for business email and website in new server.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20231210-0559.php");
  $index->Display();
?>