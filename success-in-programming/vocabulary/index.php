<?php
  require("../../page.php");
  $index = new Page();
  $index->title = "About Jaime Montoya";
  $index->metaDescription = "Mission, vision and values statements for Jaime Montoya.";
  require("vocabulary.php");
  $index->Display();
?>
