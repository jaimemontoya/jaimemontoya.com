<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "NVIDIA Corporation (NVDA), my first stock purchase";
  $index->parentPage = "News";
  $index->metaDescription = "After reading a few books related to investing and the stock market, using a couple of simulators, and completing my research, I made my first official, real stock purchase from NVIDIA Corporation (NVDA).";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20241113-2239.php");
  $index->Display();
?>