<?php
  require("home.php");
  $index = new HomePage();
  $index->content .= "<h1 class=\"center\">Jaime Montoya's net worth: 1) Current: <span class=\"cod\">42,025.16 USD</span> as of 21 July 2026. 2) All-time high: <span class=\"cod\">42,782.58 USD</span> on 19 July 2026.
  </h1>
  <hr>
  <h2>Table of contents</h2>
  <ol>
    <li><a href=\"about/\">About</a>: Jaime Montoya's resume.
	<li><a href=\"coursera/\">Coursera</a>: Coursera courses I have successfully completed.
  </ol>
  <hr>
  
  <p>My investment philosophy is inspired by the Matthew effect, sometimes called the Matthew principle or cumulative advantage. For that reason, whenever I buy stocks I only choose the world's most valuable company by market capitalization. I follow a disciplined long term blue chip stock investing approach. I passionately advocate for 1) Financial greatness 2) Freedom from financial debt. This is the Matthew 25:29 Bible verse in the King James Verse:</p>
  <div class=\"center\"><img src=\"img/kingJamesBibleMatthewCh25V29.jpg\" alt=\"Matthew 25:29 in the King James Version\" width=\"318\" height=\"70\"></div>
  <p>Following my investment philosophy, if I were to buy stocks today 21 July 2026, Nvidia Corporation (NVDA) is the company where I would invest it all:</p>
  <div class=\"center\"><img src=\"img/NVIDIA_logo.jpg\" alt=\"Nvidia Corporation logo\" width=\"206\" height=\"140\"></div>
  <h2>Featured financial charts</h2>
  <div id=\"jaime-montoya-capital\"></div>
  <iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSnedM83IJlnIUy0Ttj4DrDrGWCrqhjC_HXUwxa8cv3nmhraprEToUSuy776FLfXewO49AdS_9SQdUH/pubhtml?widget=true&amp;headers=false\" id=\"investment-spreadsheet\"></iframe>
  <div id=\"richest-company\"></div>
  <div id=\"richest-people\"></div>
  ";
  $index->Display();
?>

