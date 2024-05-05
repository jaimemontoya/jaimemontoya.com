<?php
  require("../page.php");
  $weight = new Page();
  $weight->title = "Capital";
  $weight->metaDescription = "Jaime Montoya's capital history since May 5, 2024.";
  $weight->content .= "<h1>Capital</h1>";
  require("all/all-book-info.php");
  require("2024/2024-book-info.php");
  $weight->Display();
?>