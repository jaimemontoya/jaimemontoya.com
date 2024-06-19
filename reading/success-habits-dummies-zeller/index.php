<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Success Habits For Dummies";
  $index->metaDescription = "Bestselling author Dirk Zeller provides tried-and-true advice on creating, building, and cultivating winning habits to achieve success.";
  require("success-habits-dummies-zeller-book-info.php");
  $index->Display();
?>

