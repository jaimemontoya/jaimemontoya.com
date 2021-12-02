<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Jaime Montoya's calendar";
  $index->metaDescription = "My calendar shows how I spend my time. It includes five components for my time: full-time-work, freelancing-and-volunteering-work, studying, reading and exercising.";
  require("calendar-info.php");
  $index->Display();
?>
