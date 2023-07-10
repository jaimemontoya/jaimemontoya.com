<?php
require ("page.php");
class FinancesPage extends Page
{
  public function Display()
  {
    echo "<!doctype html>\n<html lang=\"en\">\n\t<head>\n";
    $this -> DisplayGoogleAnalytics();
    $this -> DisplayFontAwesome();
    $this -> DisplayTitle();
    $this -> DisplayFavicon();
    $this -> DisplayMetaCharset();
    $this -> DisplayMetaKeywords();
    $this -> DisplayMetaDescription();
    $this -> DisplayMetaViewport();
    $this -> DisplayStyles();
    echo "\t</head>\n\t<body>\n";
    $this -> DisplayHeader();
    echo "\t\t<div>\n";
    echo $this->content;
    echo "\t\t</div>\n";
	$this -> DisplayFooter();
    echo "\t</body>\n</html>\n";
  }
}
?>