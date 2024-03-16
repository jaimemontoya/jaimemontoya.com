<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Facebook Login for Android";
  $index->parentPage = "Blog";
  $index->metaDescription = "Implementation of Facebook Login using the Facebook SDK for Android.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20240117-0252.php");
  $index->Display();
?>