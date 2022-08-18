<?php
  require("../page.php");
  $index = new Page();
  $index->title = "The Hidden History of Monopolies";
  $index->metaDescription = "Hartmann takes us from the birth of America as a revolt against monopoly (remember the Boston Tea Party?), to the largely successful efforts of both Presidents Theodore and Franklin Roosevelt and other like-minded leaders to restrain corporations' monopolistic urges.";
  require("the-hidden-history-of-monopolies-book-info.php");
  $index->Display();
?>