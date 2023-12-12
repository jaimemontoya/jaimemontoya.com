<?php
  require("page.php");
  $index = new Page();
  $index->content .= "<h1>jaimemontoya.com: Jaime Montoya's Personal Home Page</h1><p>Welcome to jaimemontoya.com, Jaime Montoya's Personal Home Page, a website organized in three main categories:</p><ol><li>Portfolio: Websites created, designed, developed, upgraded, maintained and/or hosted by Jaime Montoya<li>Blog: Software technical documentation blog for myself and the world<li>About: Jaime Montoya's one-page resume</ol>";
  $index->Display();
?>

