<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Customer Centricity: Focus on the Right Customers for Strategic Advantage (Wharton Executive Essentials)";
  $index->metaDescription = "A powerful call to action, Customer Centricity upends some of our most fundamental beliefs about customer service, customer relationship management, and customer lifetime value.";
  require("customer-centricity-book-info.php");
  $index->Display();
?>