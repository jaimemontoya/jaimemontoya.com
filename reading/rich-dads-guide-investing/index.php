<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Rich Dad's Guide to Investing: What the Rich Invest in, That the Poor and the Middle Class Do Not!";
  $index->metaDescription = "Rich Dad’s Guide to Investing, one of the three core titles in the Rich Dad Series, covers the basic rules of investing, how to reduce your investment risk, how to convert your earned income into passive income- plus Rich Dad’s 10 Investor Controls.";
  require("rich-dads-guide-investing-book-info.php");
  $index->Display();
?>