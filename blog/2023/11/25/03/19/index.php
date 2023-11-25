<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Happy launch of https://mfh-elsalvador.org!";
  $index->parentPage = "Blog";
  $index->metaDescription = "Happy launch of the redesigned version of https://mfh-elsalvador.org!";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20231125-0319.php");
  $index->Display();
?>