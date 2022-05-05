<?php
  require("page.php");
  $index = new Page();
  $index->content .= "Hi.";
  $index->content .= "<script src=\"https://s3-us-west-2.amazonaws.com/bloomerang-public-cdn/lacasademipadre/.widget-js/6536192.js\" type=\"text/javascript\"></script>";
  $index->Display();
?>

