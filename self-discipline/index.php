<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Jaime Montoya's self-discipline";
  $index->metaDescription = "Self-discipline and habits program to achieve goals. Calendar shows how I spend my time. It includes five components for my time: full-time-work, freelancing-and-volunteering-work, studying, reading and exercising.";
  require("self-discipline-info.php");
  $index->Display();
?>