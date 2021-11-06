<?php
class Page
{
  // class Page's attributes
  public $content;
  public $title = "Jaime Montoya";
  public $keywords = "Jaime Montoya's website featuring books I have read, courses I have taken, my self-discipline agenda, r&eacute;&eacute; and achievements.";
  public $buttons = array("Home"   => "home.php",
                        "Self-discipline"  => "self-discipline.php",
                        "R&eacute;sum&eacute;" => "resume.php",
                        "Achievements" => "achievements.php"
                    );
					
  // class Page's operations
  public function __set($name, $value)
  {
    $this->$name = $value;
  }
  
  public function Display()
  {
    echo "<html>\n\t<head>\n";
    $this -> DisplayTitle();
    $this -> DisplayKeywords();
    echo "\t</head>\n\t<body>\n";
    $this -> DisplayHeader();
    echo $this->content;
    echo "\t</body>\n</html>\n";
  }
  
  public function DisplayTitle()
  {
    echo "\t\t<title>".$this->title."</title>\n";
  }
  
  public function DisplayKeywords()
  {
    echo "\t\t<meta name='keywords' content='".$this->keywords."' />\n";
  }
  
  public function DisplayHeader()
  {
    echo "\t\t<!-- page header -->\n\t\t<header>\n\t\t\t<h1>Jaime Montoya</h1>\n\t\t</header>\n";
  }
}
?>