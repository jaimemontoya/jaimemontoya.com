<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Twitter 101: Everything You Need to Know about Twitter Marketing";
  $index->metaDescription = "Use Twitter to turbocharge your brand and business, engage users, connect with your industry, and build word-of-mouth that translates directly into sales!";
  require("twitter-101-everything-book-info.php");
  $index->Display();
?>