<?php
  require("../page.php");
  $index = new Page();
  $index->title = "About";
  $index->metaDescription = "The latest version of my resume is always available from this page. It includes my skills, experience, education, standardized tests and certifications in a one-page size.";
  require("about-info.php");
  $index->Display();
?>
