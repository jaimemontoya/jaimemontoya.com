<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Multiply: Disciples Making Disciples";
  $index->metaDescription = "One plus one plus one. Every copy of Multiply is designed to do what Jesus did: make disciples who make disciples who make disciples…. Until the world knows the truth of Jesus Christ.";
  require("multiply-book-info.php");
  $index->Display();
?>