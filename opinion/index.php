<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Opinion";
  $index->metaDescription = "Stock Market, Business & Finance Opinion since 2024-Dec-30 9:47 PM GMT.";
  $index->content .= "<h1>Opinion</h1><p>Stock Market, Business & Finance Opinion since 2024-Dec-30 9:47 PM GMT.</p>";
  $index->content .= 
           "\t\t\t<iframe src=\"https://docs.google.com/document/d/e/2PACX-1vSI9um9QUifKrVuSKbRJexc1qWy1aaFrSOc3Rjzx8WrGU9_INb5x8vR3EmTPkcdom2mgN5kwW9J6RTq/pub?embedded=true\" id=\"opinion-spreadsheet\"></iframe>\n";
  require("2025/01/06/20/07/20250106-2007-book-info.php");
  require("2025/01/05/14/30/20250105-1430-book-info.php");
  require("2025/01/04/01/25/20250104-0125-book-info.php");
  require("2025/01/03/01/42/20250103-0142-book-info.php");
  require("2025/01/02/16/02/20250102-1602-book-info.php");
  require("2025/01/01/21/33/20250101-2133-book-info.php");
  require("2024/12/31/06/32/20241231-0632-book-info.php");
  require("2024/12/30/21/47/20241230-2147-book-info.php");
  $index->Display();
?>