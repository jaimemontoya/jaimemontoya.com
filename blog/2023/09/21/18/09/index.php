<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "My first blog entry";
  $index->parentPage = "Blog";
  $index->metaDescription = "Instead of social media, I decided to create a blog from scratch, not only in terms of content, but also in how I built it from a technical software development standpoint. I started with a 'Hello, World!' program program.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20230921-1809.php");
  $index->Display();
?>