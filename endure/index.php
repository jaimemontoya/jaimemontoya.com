<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Endure: Mind, Body, and the Curiously Elastic Limits of Human Performance";
  $index->metaDescription = "Blending cutting-edge science and gripping storytelling in the spirit of Malcolm Gladwell—who contributes the book’s foreword—award-winning journalist Alex Hutchinson reveals that a wave of paradigm-altering research over the past decade suggests the seemingly physical barriers you encounter as set as much by your brain as by your body.";
  require("endure-book-info.php");
  $index->Display();
?>