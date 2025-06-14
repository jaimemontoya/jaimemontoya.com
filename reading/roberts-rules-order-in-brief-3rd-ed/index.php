<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Robert's Rules of Order Newly Revised In Brief, 3rd edition.";
  $index->metaDescription = "Originally published in 1876, Robert's Rules of Order is the definitive book on parliamentary proceedings, yet those not well versed on what has now become a rather thick document can find themselves lost. The solution? Robert's Rules of Order Newly Revised in Brief.";
  require("roberts-rules-order-in-brief-3rd-ed-book-info.php");
  $index->Display();
?>