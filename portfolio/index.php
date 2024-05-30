<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Portfolio";
  $index->metaDescription = "Websites created, designed, developed, upgraded, maintained and/or hosted by Jaime Montoya";
  $index->content .= "<h1>Portfolio</h1><p>Websites I have created, designed, developed, upgraded, maintained and/or hosted.</p>";
  require("mfh-elsalvador.org/mfh-elsalvador.org-book-info.php");
  require("unionchurchss.org/unionchurchss.org-book-info.php");
  require("jaimemontoya.com/jaimemontoya.com-book-info.php");
  $index->Display();
?>

