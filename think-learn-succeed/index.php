<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Think, Learn, Succeed: Understanding and Using Your Mind to Thrive at School, the Workplace, and Life";
  $index->metaDescription = "Backed by up-to-date scientific research and biblical insight, Dr. Caroline Leaf empowers readers to take control of their thoughts in order to take control of their lives.";
  require("think-learn-succeed-book-info.php");
  $index->Display();
?>