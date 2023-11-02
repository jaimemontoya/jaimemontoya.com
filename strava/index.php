<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Strava";
  $index->metaDescription = "Running information recorded from Stava.";
  require("strava-info.php");
  $index->Display();
?>
