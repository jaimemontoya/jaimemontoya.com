<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Personal Branding For Dummies, 2nd Edition";
  $index->metaDescription = "The simple guide to managing your personal brand, a vital element of success in the professional world. A terrific introduction to personal branding.";
  require("personal-branding-for-book-info.php");
  $index->Display();
?>