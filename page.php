<?php
class Page
{
  public $content;
  public $title = "jaimemontoya.com: Jaime Montoya's Personal Home Page";
  public $parentPage = "";
  public $metaKeywords = "jaimemontoya.com, Jaime Montoya, Personal Home Page, website, portfolio, software technical documentation, blog, resume";
  public $metaDescription = "jaimemontoya.com, Jaime Montoya's Personal Home Page, featuring software technical documentation blog, and one-page resume.";
  public $metaViewport = "width=device-width, initial-scale=1.0";
  public $buttons = array("<i class=\"fa-solid fa-house\"></i>" => "/", "<i class=\"fa-solid fa-blog\"></i>" => "/blog/", "<i class=\"fa-solid fa-address-card\"></i>" => "/about/");
  public $parentPages = array("Coursera" => "/coursera/", "Weight" => "/weight/", "Running" => "/run/", "Book reviews" => "/book/", "Blog" => "/blog/", "Capital" => "/capital/", "Teaching" => "/teaching/");
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
	echo $this -> DisplayBreadcrumb($this->title, $this->parentPage, $this->parentPages);
    echo $this->content;
	$this -> DisplayFooter();
    echo "\t\t</div>\n";	
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
    // $this -> DisplayMenu($this->buttons);
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
  public function DisplayBreadcrumb($title, $parentPage, $parentPages)
  {
    $homePage = "/";
    $currentPage = $_SERVER['REQUEST_URI'];
    if($currentPage != $homePage AND $currentPage != '/index.php') {
      $breadcrumb = "\t\t\t<ul class=\"breadcrumb-block\"><li><a href=\"/\">Home</a> › ";
	  if (array_key_exists($parentPage, $parentPages)) {
        $breadcrumb .= "<a href=\"".$parentPages[$parentPage]."\">".$parentPage."</a> › ";
	  }
	  $breadcrumb .= $title."</ul>";
    }
	echo $breadcrumb;
  }
  public function DisplayButton($name, $url)
  {
    echo "\t\t\t\t\t<li>\n\t\t\t\t\t\t<a href=".$url.">".$name."</a>\n\t\t\t\t\t</li>\n";
  }
  public function DisplayFooter()
  {
    echo "\t\t<footer>\n\t\t\t<div>\n\t\t\t<a href=\"#\">Back to top</a>\n\t\t\t</div>\n\t\t</footer>\n";
  }
  public function BookReviewsBibliography()
  {
    return "\t\t<div class=\"margintop15\">* Book review template obtained from \"Motta-Roth, D. (1998), Discourse analysis and academic book reviews: A study of text and disciplinary cultures. In 1. Fartanet, S. Posteguillo, J.C. Palmer, and J. F. Coli (Eds.), <span class=\"italic\">Genre studies in English for academic purposes</span> (pp. 29-58). Castello, Spain: Universitat Jaume I.\"</div>";
  }
}
?>