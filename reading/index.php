<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Reading";
  $index->metaDescription = "Listing all of the books read by Jaime Montoya from cover to cover.";
  $index->content .= "<h1>Reading</h1><p>Listing all of the books I have read from cover to cover.</p>";
  require("american-prometheus/american-prometheus-book-info.php");
  require("ab-testing-the/ab-testing-the-book-info.php");
  require("personal-branding-for/personal-branding-for-book-info.php");
  require("income-investing-an/income-investing-an-book-info.php");
  require("scaling-up-companies-rockefeller-habits/scaling-up-companies-rockefeller-habits-book-info.php");
  require("google-speaks-secrets/google-speaks-secrets-book-info.php");
  require("twitter-101-everything/twitter-101-everything-book-info.php");
  require("born-to-blog/born-to-blog-book-info.php");
  require("success-in-programming/success-in-programming-book-info.php");
  $index->Display();
?>
