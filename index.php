<?php
  require("page.php");
  $index = new Page();
  $index->content .= "<h1>jaimemontoya.com: Jaime Montoya's Personal Home Page</h1><p>Welcome to jaimemontoya.com, Jaime Montoya's Personal Home Page, a website organized in three main categories:</p><ol><li><a href=\"portfolio/\">Portfolio</a>: Websites created, designed, developed, upgraded, maintained and/or hosted by Jaime Montoya<li><a href=\"blog/\">Blog</a>: Software technical documentation blog for myself and the world<li><a href=\"about/\">About</a>: Jaime Montoya's one-page resume</ol><p>Call to action: <a href=\"https://www.digitalocean.com/?refcode=9ff562a168bb&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge\" class=\"call-to-action\">Get a DigitalOcean $200, 60-day credit!</a><p>Do you need more information about what you can do with those $200?</p></p>";
  $index->Display();
?>

