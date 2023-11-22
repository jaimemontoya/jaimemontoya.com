<?php
  require("../../page.php");
  $index = new Page();
  $index->title = "mfh-elsalvador.org";
  $index->metaDescription = "Since 2002, La Casa de mi Padre Foundation has provided integral support to at-risk children and adolescents in El Salvador.";
  require("mfh-elsalvador.org-book-info.php");
  $index->Display();
?>