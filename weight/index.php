<?php
  require("../page.php");
  $weight = new Page();
  $weight->title = "Weight";
  $weight->metaDescription = "Jaime Montoya's weight history since October 29, 2019.";
  $weight->content .= "<h1>Weight</h1>";
  require("all/all-book-info.php");
  require("2024/2024-book-info.php");
  require("2023/2023-book-info.php");
  require("2022/2022-book-info.php");
  require("2021/2021-book-info.php");
  require("2020/2020-book-info.php");
  require("2019/2019-book-info.php");
  $weight->Display();
?>