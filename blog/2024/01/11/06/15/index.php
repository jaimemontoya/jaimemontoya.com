<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Creating an online analytical processing (OLAP) cube on top of a data mart relational database";
  $index->parentPage = "Blog";
  $index->metaDescription = "Development of an OLAP cube in a Multidimensional BI Semantic Model, implementing the cube's basic parts: measures and dimensions.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20231231-0614.php");
  $index->Display();
?>