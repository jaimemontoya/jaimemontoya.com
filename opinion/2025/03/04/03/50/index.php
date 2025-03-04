<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Saudi Aramco with stock price growth while the American companies experienced heavy losses. Nvidia stocks tumbled. Microsoft richer than Nvidia. Arnault benefited from not having his company’s headquarters and stocks mainly in the U.S. Jeff Bezos lost $6.6 billion.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Saudi Aramco benefited from being outside of the U.S. to make its stock price grow on Monday, since for the U.S., the stock market had a catastrophic day of losses. Apparently those losses were the result of fears about the tariffs taking effect on 4 Mar 2025.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250304-0350.php");
  $index->Display();
?>