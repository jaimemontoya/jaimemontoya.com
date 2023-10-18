<?php
  require("../../page.php");
  $index = new Page();
  $index->title = "unionchurchss.org";
  $index->metaDescription = "Official website of Union Church of San Salvador, following Jesus in grace and truth.";
  require("unionchurchss.org-book-info.php");
  $index->Display();
?>