<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Nvidia criticizes Biden’s plan. Meta reconciling with Trump.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "Nvidia used firm and strong words to criticize the reported Biden plan for Artificial Intelligence chips to limit exports to countries that are not U.S. allies. Nvidia Vice President Ned Finkle said by email: \"We would encourage President Biden to not preempt incoming President Trump by enacting a policy that will only harm the U.S. economy, set America back, and play into the hands of U.S. adversaries,\".";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250112-0423.php");
  $index->Display();
?>