<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Sticky Teams: Keeping Your Leadership Team and Staff on the Same Page";
  $index->metaDescription = "Learn the secrets to building and maintaining a healthy, productive, and unified ministry team that sticks together for the long haul.";
  require("sticky-teams-book-info.php");
  $index->Display();
?>