<?php
class Page
{
  public $content;
  public $title = "Jaime Montoya";
  public $metaKeywords = "Jaime Montoya's website featuring books I have read, courses I have taken, my self-discipline agenda, r&eacute;&eacute; and achievements.";
  public $metaDescription = "Scala programmer specialist in software development building ETL processes for big data applications.";
  public $metaViewport = "width=device-width, initial-scale=1.0";
  public $buttons = array("Home" => "/", "Self-discipline" => "/self-discipline/", "R&eacute;sum&eacute;" => "/resume/", "Achievements" => "/achievements/");
  public function __set($name, $value)
  {
    $this->$name = $value;
  }  
  public function Display()
  {
    echo "<!DOCTYPE html>\n\t<head>\n";
    $this -> DisplayTitle();
    $this -> DisplayFavicon();
    $this -> DisplayMetaKeywords();
    $this -> DisplayMetaDescription();
    $this -> DisplayMetaViewport();
    $this -> DisplayStyles();
    echo "\t</head>\n\t<body>\n";
    $this -> DisplayHeader();
	echo "\t\t<div class=\"container\">\n";
    echo $this->content;
	echo "\t\t</div>\n";
	$this -> DisplayFooter();
    echo "\t</body>\n</html>\n";
  }
  public function DisplayTitle()
  {
    echo "\t\t<title>".$this->title."</title>\n";
  }
  public function DisplayFavicon()
  {
    echo "\t\t<link rel=\"icon\" href=\"/img/favicon.ico\" type=\"image/x-icon\" />\n";
  }
  public function DisplayMetaKeywords()
  {
    echo "\t\t<meta name=\"keywords\" content=\"".$this->metaKeywords."\" />\n";
  }
  public function DisplayMetaDescription()
  {
    echo "\t\t<meta name=\"description\" content=\"".$this->metaDescription."\" />\n";
  }
  public function DisplayMetaViewport()
  {
    echo "\t\t<meta name=\"viewport\" content=\"".$this->metaViewport."\" />\n";
  }
  public function DisplayStyles()
  {
    echo "\t\t<link href=\"/bootstrap.css\" type=\"text/css\" rel=\"stylesheet\" />\n";
    echo "\t\t<link href=\"/bootstrap-responsive.css\" type=\"text/css\" rel=\"stylesheet\" />\n";
    echo "\t\t<link href=\"/styles.css\" type=\"text/css\" rel=\"stylesheet\" />\n";
    echo "\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Carter+One\" />\n";
  }
  public function DisplayHeader()
  {
    echo "\t\t<header>\n\t\t\t<div class=\"logo\">\n\t\t\t\t<a href=\"/\" title=\"Jaime Montoya\">Jaime Montoya</a>\n\t\t\t</div>\n";
    $this -> DisplayMenu($this->buttons);
    echo "\t\t</header>\n";
  }
  public function DisplayMenu($buttons)
  {
    echo "\t\t\t<nav>\n\t\t\t\t<ul>\n";
    while (list($name, $url) = each($buttons)) {
      $this->DisplayButton($name, $url, !$this->IsURLCurrentPage($url));
    }
    echo "\t\t\t\t</ul>\n\t\t\t</nav>\n";
  }
  public function DisplayButton($name, $url)
  {
    echo "\t\t\t\t\t<li>\n\t\t\t\t\t\t<a href=".$url.">".$name."</a>\n\t\t\t\t\t</li>\n";
  }
  public function DisplayFooter()
  {
    echo "\t\t<footer>\n\t\t\t<div>\n\t\t\t<a href=\"#\">Back to top</a>\n\t\t\t</div>\n\t\t</footer>\n";
  }
}
?>