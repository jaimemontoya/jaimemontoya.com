<?php
  require("page.php");
  $index = new Page();
  $index->content .= "<h1>Jaime Montoya's website</h1><h2>Table of contents</h2><ol><li><a href=\"about/\">About</a>: My one-page resume.<li><a href=\"blog/\">Blog</a>: Software technical documentation blog for myself and the world.<li><a href=\"book/\">Book reviews</a>: My reviews for some of the books I have read from cover to cover.<li><a href=\"capital/\">Capital</a>: Capital history in my records since May 5, 2024.<li><a href=\"coursera/\">Coursera</a>: Coursera courses I have successfully completed.<li><a href=\"finances/\">Finances</a>: Personal finance software I have created.<li><a href=\"investment\">Investment</a>: Mutual funds and stock investments I have made since April 12, 2024.<li><a href=\"portfolio/\">Portfolio</a>: Websites I have created, designed, developed, upgraded, maintained and/or hosted.<li><a href=\"reading/\">Reading</a>: Listing all of the books I have read from cover to cover since August 31, 2018.<li><a href=\"run/\">Running</a>: Running history I have endured since August 2, 2020.<li><a href=\"teaching/\">Teaching</a>: In-person classes I have taught.<li><a href=\"weight/\">Weight</a>: Weight history from my body since October 19, 2019.</ol></p>";
  $index->Display();
?>

