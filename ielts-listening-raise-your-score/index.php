<?php
  require("../page.php");
  $index = new Page();
  $index->title = "IELTS - Listening: Raise your Score & Work or Study Abroad (IELTS - Knowing How!)";
  $index->metaDescription = "This book was my attempt to reach out to struggling students, those who are having trouble scoring high enough for study visas or work visas to go abroad.";
  require("ielts-listening-raise-your-score-book-info.php");
  $index->Display();
?>