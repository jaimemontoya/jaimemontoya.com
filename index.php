<?php
  require("page.php");
  $index = new Page();
  $index->content ="\t\t<!-- page content -->\n\t\t<p>";
  ?>
  Jaime Montoya
  <?
  echo "</p>\n";
  $index->Display();
?>

