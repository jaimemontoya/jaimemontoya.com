<?php
  require("../page.php");
  $index = new Page();
  $index->title = "The Amazon Way: Amazon's 14 Leadership Principles";
  $index->metaDescription = "The 3rd edition of The Amazon Way is one of the rare business leadership books giving actionable insights for innovation and business growth to be the basis for your digital transformation gameplan.";
  require("the-amazon-way-book-info.php");
  $index->Display();
?>