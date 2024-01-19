<?php
  require("page.php");
  $index = new Page();
  $index->content .= "<h1>jaimemontoya.com: Jaime Montoya's Personal Home Page</h1><p>Welcome to jaimemontoya.com, Jaime Montoya's Personal Home Page, a website organized in three categories:</p><ol><li><a href=\"mission-vision-values\">Mission, Vision, and Values:</a> Definition of my personal Mission and Vision statements, including a list of Values that distinghish my character.<li><a href=\"blog/\">Blog</a>: Software technical documentation blog for myself and the world<li><a href=\"about/\">About</a>: Jaime Montoya's one-page resume</ol>";
  $index->Display();
?>

