<?php
  require("home.php");
  $index = new HomePage();
  $index->content .= "<div id=\"jaime-montoya-capital\"></div>
  <div id=\"richest-company\"></div>
  <div id=\"richest-people\"></div>
  <h2 style=\"cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Arial; font-size: 16px; font-weight: bold;\">Jaime Montoya's investments from 5 May 2024 to 25 September 2026</h2>
  <ul>
    <li><a href=\"beat-the-market/Capital.html\" target=\"_blank\" rel=\"noopener noreferrer\">Capital including chronological net worth resulting from investments and amounts in (a) Mutual funds (b) Bank accounts (c) Stock market.
  </ul>
  ";
  $index->Display();
?>