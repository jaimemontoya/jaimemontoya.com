<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Tesla and Musk suffer consequences from Trump’s stiff tariffs. Meta and Zuckerberg outliers in a bad day for the stock market. Amazon is now richer than Google.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "The drama in the race between Amazon and Google continues. Google surpassed Amazon in wealth on 31 Jan 2025, but just 4 days later, Amazon is richer than Google again. For now Amazon is the winner. Both companies are fighting for the title of 4th richest company in the world. But none of them has been in recent weeks, in a realistic position to reach the top 3 in the ranking.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250204-1322.php");
  $index->Display();
?>