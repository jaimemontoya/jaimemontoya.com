<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Nvidia is the richest company in the world. Apple struggling with iPhone sales. Musk experiencing competition for his company. Apple no longer king. Ellison receiving great news from Trump’s executive orders. Zuckerberg no longer wealthier than Ellison.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "It was on 6 January 2025 that Mark Zuckerberg took the position of third wealthiest person in the world from Larry Ellison, but now Zuckerberg lost and again Ellison is in the top 3. Zuckerberg could only keep the title for half a month.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250122-0135.php");
  $index->Display();
?>