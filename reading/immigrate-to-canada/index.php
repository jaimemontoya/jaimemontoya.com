<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Immigrate to Canada: How to Prepare Materials for Express Entry Like a Pro";
  $index->metaDescription = "Learn about key materials which Express Entry applicants need to prepare. It includes sample letters of verification from employers and financial institutions, and sample Proofs of Financial Support.";
  require("immigrate-to-canada-book-info.php");
  $index->Display();
?>