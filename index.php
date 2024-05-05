<?php
  require("page.php");
  $index = new Page();
  $index->content .= "<h1>jaimemontoya.com: Jaime Montoya's Personal Home Page</h1><p>Welcome to jaimemontoya.com, Jaime Montoya's Personal Home Page, a website organized in seven categories:</p><ol><li><a href=\"coursera/\">Coursera</a>: Coursera courses I have successfully completed.<li><a href=\"book/\">Book reviews</a>: Reviews for all books I have read from cover to cover.<li><a href=\"blog/\">Blog</a>: Software technical documentation blog for myself and the world.<li><a href=\"run/\">Running</a>: Jaime Montoya's running history since August 2, 2020.<li><a href=\"weight/\">Weight</a>: Jaime Montoya's weight history since October 19, 2019.<li><a href=\"capital/\">Capital</a>: Jaime Montoya's capital history since May 5, 2024.<li><a href=\"about/\">About</a>: Jaime Montoya's one-page resume.</ol></p>";
  $index->Display();
?>

