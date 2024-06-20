<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Rich Dad Poor Dad: What the Rich Teach Their Kids About Money That the Poor and Middle Class Do Not!";
  $index->metaDescription = "Rich Dad Poor Dad is Robert's story of growing up with two dads his real father and the father of his best friend, his rich dad and the ways in which both men shaped his thoughts about money and investing. The book explodes the myth that you need to earn a high income to be rich and explains the difference between working for money and having your money work for you.";
  require("rich-dad-poor-dad-book-info.php");
  $index->Display();
?>