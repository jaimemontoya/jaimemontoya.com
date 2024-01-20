<?php
  require("page.php");
  $index = new Page();
  $index->content .= "<h1>jaimemontoya.com: Jaime Montoya's Personal Home Page</h1><p>Welcome to jaimemontoya.com, Jaime Montoya's Personal Home Page, a website organized in two categories:</p><h2>Mission</h2><p>To document repeatable and scalable software technical solutions based on my real-world experience working as a programmer for my full-time employers, clients of my freelancing services, individuals/organizations beneficiaries of my donated work/software/services, and myself (research/personal projects); providing software integrations that contribute to increase profits and reduce costs.</p><ol><li><a href=\"blog/\">Blog</a>: Software technical documentation blog for myself and the world<li><a href=\"about/\">About</a>: Jaime Montoya's one-page resume</ol>";
  $index->Display();
?>

