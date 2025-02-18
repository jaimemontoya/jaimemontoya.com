<?php
  require("../../../../../../page.php");
  $index = new Page();
  $index->title = "Nvidia still in high demand. Broadcom may struggle in the race against TSMC.";
  $index->parentPage = "Opinion";
  $index->metaDescription = "The January 2025 monthly revenue of TSMC resulted in a 35.9% year-over-year jump that can indicate that the demand for Nvidia's AI chips is still growing. This is because Nvidia is outsourcing the fabrication of the semiconductor chips it produces, focusing only on creating the design of those chips. The manufacturing is done by TSMC, meaning that TSMC's revenue can be an indicator of demand for Nvidia's chips that are currently important as an engine for the AI revolution.";
  $index->content .= "\t\t\t<h1>".$index->title."</h1>";
  require("book-info-20250218-0002.php");
  $index->Display();
?>