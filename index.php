<?php
  require("home.php");
  $index = new HomePage();
  $index->content .= "<div id=\"jaime-montoya-capital\"></div>
  <div id=\"richest-company\"></div>
  <div id=\"richest-people\"></div>
  <iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSnedM83IJlnIUy0Ttj4DrDrGWCrqhjC_HXUwxa8cv3nmhraprEToUSuy776FLfXewO49AdS_9SQdUH/pubhtml?widget=true&amp;headers=false\"></iframe>
  ";
  $index->Display();
?>