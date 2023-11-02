<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Stack Overflow";
  $index->metaDescription = "Stack Overflow profile for Jaime Montoya.";
  require("stack-overflow-info.php");
  $index->Display();
?>
