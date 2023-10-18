<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Jaime Montoya's portfolio";
  $index->metaDescription = "Websites designed, developed and/or hosted by Jaime Montoya";
  require("unionchurchss.org/unionchurchss.org-book-info.php");
  require("jaimemontoya.net/jaimemontoya.net-book-info.php");
  require("jaimemontoya.com/jaimemontoya.com-book-info.php");
  $index->Display();
?>

