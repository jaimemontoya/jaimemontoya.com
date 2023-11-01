<?php
class Page
{
  public $content;
  public $title = "jaimemontoya.com";
  public $metaKeywords = "Data analyst specialist in data migration using Microsoft SSIS technologies.";
  public $metaDescription = "Data analyst specialist in data migration using Microsoft SSIS technologies.";
  public $metaViewport = "width=device-width, initial-scale=1.0";
  public $buttons = array("<i class=\"fa-solid fa-house\"></i>" => "/", "<i class=\"fa-brands fa-github\"></i>" => "https://github.com/jaimemontoya/jaimemontoya.com/", "<i class=\"fa-brands fa-canadian-maple-leaf\"></i>" => "/portfolio/", "<i class=\"fa-solid fa-blog\"></i>" => "/blog/", "<i class=\"fa-brands fa-linkedin\"></i>" => "/about/");
  public function __set($name, $value)
  {
    $this->$name = $value;
  }
  public function Display()
  {
    echo "<!doctype html>\n<html lang=\"en\">\n\t<head>\n";
    $this -> DisplayGoogleAdSense();
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
    echo "\t\t<div class=\"container\">\n";
	echo $this -> DisplayBreadcrumb();
    echo $this->content;
    echo "\t\t</div>\n";
	$this -> DisplayFooter();
    echo "\t</body>\n</html>\n";
  }
  public function DisplayGoogleAdSense()
  {
    echo "\t\t<script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7783699462803040\" crossorigin=\"anonymous\"></script>";
  }
  public function DisplayFontAwesome()
  {
    echo "\t\t<script src=\"https://kit.fontawesome.com/90e0428d46.js\" crossorigin=\"anonymous\"></script>\n";
  }
  public function DisplayGoogleAnalytics()
  {
    echo "\t\t<!-- Global site tag (gtag.js) - Google Analytics -->\n\t\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-112469917-1\"></script>\n\t\t<script>\n\t\t\twindow.dataLayer = window.dataLayer || [];\n\t\t\tfunction gtag(){dataLayer.push(arguments);}\n\t\t\tgtag('js', new Date());\n\t\t\tgtag('config', 'UA-112469917-1');\n\t\t</script>\n";
  }
  public function DisplayTitle()
  {
    echo "\t\t<title>".$this->title."</title>\n";
  }
  public function DisplayFavicon()
  {
    echo "\t\t<link rel=\"icon\" href=\"/img/favicon.ico\" type=\"image/x-icon\" />\n";
  }
  public function DisplayMetaCharset()
  {
    echo "\t\t<meta charset=\"utf-8\">\n";
  }
  public function DisplayMetaKeywords()
  {
    echo "\t\t<meta name=\"keywords\" content=\"".$this->metaKeywords."\">\n";
  }
  public function DisplayMetaDescription()
  {
    echo "\t\t<meta name=\"description\" content=\"".$this->metaDescription."\">\n";
  }
  public function DisplayMetaViewport()
  {
    echo "\t\t<meta name=\"viewport\" content=\"".$this->metaViewport."\">\n";
  }
  public function DisplayStyles()
  {
    echo "\t\t<link href=\"/bootstrap.css\" type=\"text/css\" rel=\"stylesheet\">\n";
    echo "\t\t<link href=\"/bootstrap-responsive.css\" type=\"text/css\" rel=\"stylesheet\">\n";
    echo "\t\t<link href=\"/styles.css\" type=\"text/css\" rel=\"stylesheet\">\n";
    echo "\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Carter+One\">\n";
  }
  public function DisplayHeader()
  {
    echo "\t\t<header>\n\t\t\t<div class=\"logo\">\n\t\t\t\t<a href=\"/\" title=\"jaimemontoya.com\">jaimemontoya.com</a>\n\t\t\t</div>\n";
    $this -> DisplayMenu($this->buttons);
    echo "\t\t</header>\n";
  }
  public function DisplayMenu($buttons)
  {
    echo "\t\t\t<nav>\n\t\t\t\t<ul>\n";
    foreach($buttons as $name => $url) {
      $this->DisplayButton($name, $url);
    }
    echo "\t\t\t\t</ul>\n\t\t\t</nav>\n";
  }
  public function DisplayBreadcrumb()
  {
    $homePage = "/";
    $currentPage = $_SERVER['REQUEST_URI'];
	$actualLink = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$section = file_get_contents('http://www.example.com/', FALSE, NULL, 20, 14);
	
	
	
	/*$lines = file($actualLink);

// Loop through our array, show HTML source as HTML source; and line numbers too.
$count = 0;
foreach ($lines as $line_num => $line) {
	if ($count = 2){
      $result = "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
	}
	$count += 1;
}*/

	
    if($currentPage != $homePage AND $currentPage != '/index.php') {
      echo "\t\t\t<ul class=\"breadcrumb\"><li><a href=\"/\">Home</a> › </ul>";
    }         
  }
  public function DisplayButton($name, $url)
  {
    echo "\t\t\t\t\t<li>\n\t\t\t\t\t\t<a href=".$url.">".$name."</a>\n\t\t\t\t\t</li>\n";
  }
  public function BookReviewsBibliography()
  {
    return "\t\t<div class=\"margintop15\">* Book review template obtained from \"Motta-Roth, D. (1998), Discourse analysis and academic book reviews: A study of text and disciplinary cultures. In 1. Fartanet, S. Posteguillo, J.C. Palmer, and J. F. Coli (Eds.), <span class=\"italic\">Genre studies in English for academic purposes</span> (pp. 29-58). Castello, Spain: Universitat Jaume I.\"</div>";
  }
  public function DisplayFooter()
  {
    echo "\t\t<footer>\n\t\t\t<div>\n\t\t\t<a href=\"#\">Back to top</a>\n\t\t\t</div>\n\t\t</footer>\n";
  }
}
?>
