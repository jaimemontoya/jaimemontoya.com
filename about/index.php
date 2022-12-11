<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Jaime Montoya's resume";
  $index->metaDescription = "The latest version of my resume is always available from this page. It includes my skills, experience and education in a one-page size.";
  require("resume-info.php");
  $index->Display();
?>
