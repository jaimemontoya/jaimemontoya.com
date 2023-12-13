<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Jaime Montoya's one-page resume";
  $index->metaDescription = "The latest version of my resume is always available from this page. It includes my skills, experience, education, standardized tests and certifications in a one-page size.";
  $index->content .= "<h1>Jaime Montoya's one-page resume</h1>";
  require("about-info.php");
  $index->Display();
?>
