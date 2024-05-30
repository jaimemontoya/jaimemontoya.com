<?php
  require("../page.php");
  $index = new Page();
  $index->title = "About";
  $index->metaDescription = "Latest version of my resume, including skills, experience, education, standardized tests and certifications in a one-page size.";
  $index->content .= "<h1>About</h1><p>My one-page resume available on this website and LinkedIn.</p>";
  require("about-info.php");
  $index->Display();
?>
