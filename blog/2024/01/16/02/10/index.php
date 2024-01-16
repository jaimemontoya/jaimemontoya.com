<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Upgrading PHP from 8.1 to 8.3 on Apache and Ubuntu";
  $index->parentPage = "Blog";
  $index->metaDescription = "Upgrading PHP from 8.1 to 8.3 on Apache and Ubuntu with a few commands.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20240116-0210.php");
  $index->Display();
?>