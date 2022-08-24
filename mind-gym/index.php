<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Mind Gym: An Athletes Guide to Inner Excellence";
  $index->metaDescription = "Gary Mack explains how your mind influences your performance on the field or on the court as much as your physical skill does, if not more so.";
  require("mind-gym-book-info.php");
  $index->Display();
?>