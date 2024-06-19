<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Napoleon: A Life";
  $index->metaDescription = "The definitive biography of the great soldier-statesman by the acclaimed author of Churchill and The Last King of America—winner of the LA Times Book prize, finalist for the Plutarch prize, winner of the Fondation Napoleon prize and a New York Times bestseller.";
  require("napoleon-a-life-book-info.php");
  $index->Display();
?>