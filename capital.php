<?php
require ("page.php");
class CapitalPage extends Page
{
  public function Display()
  {
    echo "<!doctype html>\n<html lang=\"en\">\n\t<head>\n";
	$this -> CapitalCharts();
    $this -> DisplayGoogleAdSense();
    $this -> DisplayGoogleAnalytics();
    $this -> DisplayFontAwesome();
    $this -> DisplayTitle();
    $this -> DisplayMetaViewPort();
    $this -> DisplayFavicon();
    $this -> DisplayMetaCharset();
    $this -> DisplayMetaKeywords();
    $this -> DisplayMetaDescription();
    $this -> DisplayMetaViewport();
    $this -> DisplayStyles();
    echo "\t</head>\n\t<body>\n";
    $this -> DisplayHeader();
    echo "\t\t<div class=\"container-weight\">\n";
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
  public function CapitalCharts()
  {
    echo "\t\t<!--Load the AJAX API-->\n";
    echo "\t\t<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>\n";
	echo "\t\t<script type=\"text/javascript\">\n";
	echo "\t\t\t// Load the Visualization API and the corechart package.\n";
	echo "\t\t\tgoogle.charts.load('current', {'packages':['corechart']});\n";
	echo "\t\t\t// Set a callback to run when the Google Visualization API is loaded.\n";
	echo "\t\t\tgoogle.charts.setOnLoadCallback(drawCapitalChartAllYears);\n";
	echo "\t\t\tgoogle.charts.setOnLoadCallback(drawCapitalChart2024);\n";
	echo "\t\t\t// Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.\n";
	echo "\t\t\tfunction drawCapitalChartAllYears() {\n";
	echo "\t\t\t\t// Create the data table.\n";
	echo "\t\t\t\tvar data = new google.visualization.DataTable();\n";
	echo "\t\t\t\tdata.addColumn('string', 'Year');\n";
	echo "\t\t\t\tdata.addColumn('number', 'USD');\n";
	echo "\t\t\t\tdata.addRows([\n";
	echo "\t\t\t\t\t['2024',5836.906496]\n";
	echo "\t\t\t\t]);\n";
	echo "\t\t\t\t// Set chart options\n";
	echo "\t\t\t\tvar options = {'title':'Jaime Montoya\'s capital history by year'};\n";
	echo "\t\t\t\tbarsVisualization = new google.visualization.ColumnChart(document.getElementById('capital-all-years'));\n";
	echo "\t\t\t\tbarsVisualization.draw(data, options);\n";
	echo "\t\t\t\t// Add our over/out handlers.\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseover', barMouseOver);\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseout', barMouseOut);\n";
	echo "\t\t\t}\n";
	echo "\t\t\tfunction drawCapitalChart2024() {\n";
	echo "\t\t\t\t// Create the data table.\n";
	echo "\t\t\t\tvar data = new google.visualization.DataTable();\n";
	echo "\t\t\t\tdata.addColumn('string', 'Month');\n";
	echo "\t\t\t\tdata.addColumn('number', 'USD');\n";
	echo "\t\t\t\tdata.addRows([\n";
	echo "\t\t\t\t\t['May',6085.27],\n";
	echo "\t\t\t\t\t['Jun',5699.26],\n";
	echo "\t\t\t\t\t['Jul',2112.84129],\n";
	echo "\t\t\t\t\t['Aug',3652.596774],\n";
	echo "\t\t\t\t\t['Sep',5684.295],\n";
	echo "\t\t\t\t\t['Oct',6532.467419],\n";
	echo "\t\t\t\t\t['Nov',8079.072333],\n";
	echo "\t\t\t\t\t['Dec',9850.83]\n";
	echo "\t\t\t\t]);\n";
	echo "\t\t\t\t// Set chart options\n";
	echo "\t\t\t\tvar options = {'title':'Jaime Montoya\'s 2024 capital history by month'};\n";
	echo "\t\t\t\tbarsVisualization = new google.visualization.ColumnChart(document.getElementById('capital-2024'));\n";
	echo "\t\t\t\tbarsVisualization.draw(data, options);\n";
	echo "\t\t\t\t// Add our over/out handlers.\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseover', barMouseOver);\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseout', barMouseOut);\n";
	echo "\t\t\t}\n";
	echo "\t\t\tfunction barMouseOut(e) {\n";
	echo "\t\t\t\tbarsVisualization.setSelection([{'row': null, 'column': null}]);\n";
	echo "\t\t\t}\n";
	echo "\t\t</script>\n";
  }
}
?>