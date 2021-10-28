<?php
class Page
{
  // class Page's attributes
  public $content;
  public $title = "Jaime Montoya";
  public $keywords = "Jaime Montoya's website featuring books I have read, courses I have taken,
                     my self-discipline agenda, r&eacute;&eacute; and achievements.";
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
    echo "<html>\n<head>\n";
    $this -> DisplayTitle();
    $this -> DisplayKeywords();
    echo "</head>\n<body>\n";
    $this -> DisplayHeader();
    echo $this->content;
    echo "</body>\n</html>\n";
  }
  
  public function DisplayTitle()
  {
    echo "<title>".$this->title."</title>";
  }
  
  public function DisplayKeywords()
  {
    echo "<meta name='keywords' content='".$this->keywords."'/>";
  }
  
  public function DisplayHeader()
  {
    ?>
    <!-- page header -->
    <header>
      <h1>Jaime Montoya</h1>
    </header>
    <?php
  }
}
?>