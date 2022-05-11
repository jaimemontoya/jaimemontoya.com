<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Personal Finance in Your 20s and 30s For Dummies";
  $index->metaDescription = "Financial advisor Eric Tyson shows students and recent grads how to make smart financial decisions in order to pay off student loans, avoid any additional debt, and create a solid plan to ensure their financial success";
  require("personal-finance-in-book-info.php");
  $index->Display();
?>