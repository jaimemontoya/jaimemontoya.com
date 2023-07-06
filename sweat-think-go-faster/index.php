<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Sweat. Think. Go Faster: A common sense approach to sports nutrition for endurance athletes";
  $index->metaDescription = "Sweat. Think. Go Faster is a must read for endurance athletes, at every level of competition. Nutritional issues on race day are one of the biggest hurdles endurance athletes face.";
  require("sweat-think-go-faster-book-info.php");
  $index->Display();
?>