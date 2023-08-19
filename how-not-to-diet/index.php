<?php
  require("../page.php");
  $index = new Page();
  $index->title = "How Not to Diet: The Groundbreaking Science of Healthy, Permanent Weight Loss";
  $index->metaDescription = "Dr. Greger hones in on the optimal criteria to enable weight loss, while considering how these foods actually affect our health and longevity.";
  require("how-not-to-diet-book-info.php");
  $index->Display();
?>