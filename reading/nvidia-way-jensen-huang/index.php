<?php
  require("../page.php");
  $index = new Page();
  $index->title = "The Nvidia Way: Jensen Huang and the Making of a Tech Giant";
  $index->metaDescription = "A deeply reported business history of the chip-designer Nvidia―from its founding in 1993 to its recent emergence as one of the most valuable corporations in the world―explaining how the company’s culture, overseen by cofounder and CEO Jensen Huang, has powered its incredible success.";
  require("nvidia-way-jensen-huang-book-info.php");
  $index->Display();
?>