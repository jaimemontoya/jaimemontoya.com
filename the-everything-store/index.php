<?php
  require("../page.php");
  $index = new Page();
  $index->title = "The Everything Store: Jeff Bezos and the Age of Amazon";
  $index->metaDescription = "The Everything Store is the revealing, definitive biography of the company that placed one of the first and largest bets on the Internet and forever changed the way we shop and read.";
  require("the-everything-store-book-info.php");
  $index->Display();
?>