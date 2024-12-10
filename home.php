<?php
require ("page.php");
class HomePage extends Page
{
  public function Display()
  {
    echo "<!doctype html>\n<html lang=\"en\">\n\t<head>\n";
	$this -> BiggestCompanyCharts();
    $this -> DisplayGoogleAdSense();
    $this -> DisplayGoogleAnalytics();
    $this -> DisplayFontAwesome();
    $this -> DisplayTitle();
    $this -> DisplayMetaViewPort();
    $this -> DisplayFavicon();
    $this -> DisplayMetaCharset();
    $this -> DisplayMetaKeywords();
    $this -> DisplayMetaDescription();
    $this -> DisplayStyles();
    echo "\t</head>\n\t<body>\n";
    $this -> DisplayHeader();
    echo "\t\t<div class=\"container-home\">\n";
	echo $this -> DisplayBreadcrumb($this->title, $this->parentPage, $this->parentPages);
    echo $this->content;
    echo "\t\t</div>\n";
	$this -> DisplayFooter();
    echo "\t</body>\n</html>\n";
  }
  public function DisplayStyles()
  {
    echo "\t\t<link href=\"/styles.css\" type=\"text/css\" rel=\"stylesheet\">\n";
    echo "\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Carter+One\">\n";
  }
  public function BiggestCompanyCharts()
  {
    echo "\t\t<!--Load the AJAX API-->\n";
    echo "\t\t<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>\n";
	echo "\t\t<script type=\"text/javascript\">\n";
	echo "\t\t\t// Load the Visualization API and the corechart package.\n";
	echo "\t\t\tgoogle.charts.load('current', {'packages':['corechart']});\n";
	echo "\t\t\t// Set a callback to run when the Google Visualization API is loaded.\n";
	echo "\t\t\tgoogle.charts.setOnLoadCallback(drawBiggestCompanyChart());\n";
	echo "\t\t\t// Callback that creates and populates a data table, instantiates the bar chart, passes in the data and draws it.\n";
	echo "\t\t\tfunction drawBiggestCompanyChart() {\n";	
    echo "\t\t\t\t// Create the data table.\n";
    echo "\t\t\t\tconst data = google.visualization.arrayToDataTable([\n";
    echo "\t\t\t\t\t['Company', 'Trillions'],\n";
    echo "\t\t\t\t\t['Apple Inc.',3.73],\n";
    echo "\t\t\t\t\t['NVIDIA Corporation',3.4],\n";
    echo "\t\t\t\t\t['Microsoft Corporation',3.32],\n";
    echo "\t\t\t\t\t['Amazon.com, Inc.',2.38],\n";
    echo "\t\t\t\t\t['Alphabet Inc.',2.16],\n";
    echo "\t\t\t\t\t['SAUDI ARABIAN OIL CO.',1.82],\n";
    echo "\t\t\t\t\t['Meta Platforms, Inc.',1.55],\n";
    echo "\t\t\t\t\t['Tesla, Inc.',1.25],\n";
    echo "\t\t\t\t\t['Berkshire Hathaway Inc.',1],\n";
    echo "\t\t\t\t\t['TAIWAN SEMICONDUCTOR MANUFACTURING',0.86]\n";
    echo "\t\t\t\t]);\n";
	echo "\t\t\t\t// Set chart options\n";
	echo "\t\t\t\tvar options = {'title':'Biggest company in the world by market capitalization'};\n";
    echo "\t\t\t\t// Draw\n";
	echo "\t\t\t\tconst chart = new google.visualization.BarChart(document.getElementById('biggest-company'));\n";
	echo "\t\t\t\tbarsVisualization.draw(data, options);\n";
	echo "\t\t\t\t// Add our over/out handlers.\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseover', barMouseOver);\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseout', barMouseOut);\n";
	echo "\t\t\t}\n";
	echo "\t\t\tfunction barMouseOver(e) {\n";
	echo "\t\t\t\tbarsVisualization.setSelection([e]);\n";
	echo "\t\t\t}\n";
	echo "\t\t\tfunction barMouseOut(e) {\n";
	echo "\t\t\t\tbarsVisualization.setSelection([{'row': null, 'column': null}]);\n";
	echo "\t\t\t}\n";
	echo "\t\t</script>\n";
  }
}
?>