<?php
require ("page.php");
class HomePage extends Page
{
  public function Display()
  {
    echo "<!doctype html>\n<html lang=\"en\">\n\t<head>\n";
	$this -> RichestCompaniesAndPeopleCharts();
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
  public function RichestCompaniesAndPeopleCharts()
  {
    echo "\t\t<!--Load the AJAX API-->\n";
    echo "\t\t<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>\n";
	echo "\t\t<script type=\"text/javascript\">\n";
	echo "\t\t\t// Load the Visualization API and the corechart package.\n";
	echo "\t\t\tgoogle.charts.load('current', {'packages':['corechart']});\n";
	echo "\t\t\tgoogle.charts.load('current', {'packages':['line']});\n";
	echo "\t\t\t// Set a callback to run when the Google Visualization API is loaded.\n";
	echo "\t\t\tgoogle.charts.setOnLoadCallback(drawRichestCompaniesChart);\n";
	echo "\t\t\tgoogle.charts.setOnLoadCallback(drawRichestPeopleChart);\n";
	echo "\t\t\tgoogle.charts.setOnLoadCallback(drawJaimeMontoyaCapitalChart);\n";
	echo "\t\t\t// Callback that creates and populates a data table, instantiates the bar chart, passes in the data and draws it.\n";
	echo "\t\t\tfunction drawRichestCompaniesChart() {\n";	
    echo "\t\t\t\t// Create the data table.\n";
    echo "\t\t\t\tconst data = google.visualization.arrayToDataTable([\n";
    echo "\t\t\t\t\t['Company', 'Trillions'],\n";
    echo "\t\t\t\t\t['AAPL',3.84],\n";
    echo "\t\t\t\t\t['NVDA',3.4],\n";
    echo "\t\t\t\t\t['MSFT',3.24],\n";
    echo "\t\t\t\t\t['GOOG',2.39],\n";
    echo "\t\t\t\t\t['AMZN',2.37],\n";
    echo "\t\t\t\t\t['2222',1.86],\n";
    echo "\t\t\t\t\t['META',1.51],\n";
    echo "\t\t\t\t\t['TSLA',1.39],\n";
    echo "\t\t\t\t\t['AVGO',1.08],\n";
    echo "\t\t\t\t\t['BRK.A',0.97]\n";
    echo "\t\t\t\t]);\n";
	echo "\t\t\t\t// Set chart options\n";
	echo "\t\t\t\tvar options = {'title':'Top ten richest companies'};\n";
    echo "\t\t\t\t// Draw\n";
	echo "\t\t\t\tconst chart = new google.visualization.ColumnChart(document.getElementById('richest-company'));\n";
	echo "\t\t\t\tchart.draw(data, options);\n";
	echo "\t\t\t\t// Add our over/out handlers.\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseover', barMouseOver);\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseout', barMouseOut);\n";
	echo "\t\t\t}\n";
	
	echo "\t\t\tfunction drawRichestPeopleChart() {\n";	
    echo "\t\t\t\t// Create the data table.\n";
    echo "\t\t\t\tconst data = google.visualization.arrayToDataTable([\n";
    echo "\t\t\t\t\t['Company', 'Billions'],\n";
    echo "\t\t\t\t\t['Musk',437.5],\n";
    echo "\t\t\t\t\t['Bezos',239.1],\n";
    echo "\t\t\t\t\t['Ellison',212.3],\n";
    echo "\t\t\t\t\t['Zuckerberg',206.9],\n";
    echo "\t\t\t\t\t['Arnault',167.5],\n";
    echo "\t\t\t\t\t['Page',159.9],\n";
    echo "\t\t\t\t\t['Brin',152.6],\n";
    echo "\t\t\t\t\t['Buffet',141.3],\n";
    echo "\t\t\t\t\t['Ballmer',127.4],\n";
    echo "\t\t\t\t\t['Huang',121.1]\n";
    echo "\t\t\t\t]);\n";
	echo "\t\t\t\t// Set chart options\n";
	echo "\t\t\t\tvar options = {'title':'Top ten richest people'};\n";
    echo "\t\t\t\t// Draw\n";
	echo "\t\t\t\tconst chart = new google.visualization.ColumnChart(document.getElementById('richest-people'));\n";
	echo "\t\t\t\tchart.draw(data, options);\n";
	echo "\t\t\t\t// Add our over/out handlers.\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseover', barMouseOver);\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseout', barMouseOut);\n";
	echo "\t\t\t}\n";
	
	echo "\t\t\tfunction drawJaimeMontoyaCapitalChart() {\n";	
    echo "\t\t\t\t// Create the data table.\n";
    echo "\t\t\t\tvar data = new google.visualization.DataTable();\n";
    echo "\t\t\t\tdata.addColumn('date', 'X');\n";
    echo "\t\t\t\tdata.addColumn('number', 'Dogs');\n";
    echo "\t\t\t\tdata.addRows([\n";
    echo "\t\t\t\t\t[new Date(2024, 4, 5), 4023.84],\n";
    echo "\t\t\t\t\t[new Date(2024, 4, 6), 4023.96],\n";
    echo "\t\t\t\t\t[new Date(2024, 4, 7), 4028.48],\n";
    echo "\t\t\t\t\t[new Date(2024, 4, 8), 5033.9],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 9), 5031.05],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 10), 5034.35],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 11), 5034.35],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 12), 5034.35],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 13), 5034.35],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 14), 5038.47],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 15), 5042.35],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 16), 6052.84],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 17), 7061.35],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 18), 7055.88],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 19), 7055.88],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 20), 7055.88],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 21), 7062.59],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 22), 7061.02],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 23), 7063.33]\n";
    echo "\t\t\t\t]);\n";
    echo "\t\t\t\tvar options = {\n";
    echo "\t\t\t\t\t'title':'Jaime Montoya\'s capital',\n";
    echo "\t\t\t\t\ttitleTextStyle:{\n";
    echo "\t\t\t\t\t\tbold: true,\n";
    echo "\t\t\t\t\t\tcolor: '#000',\n";
    echo "\t\t\t\t\t\tfontName: 'Arial'\n";
    echo "\t\t\t\t\t},\n";
    echo "\t\t\t\t\tcolors: [\"#4184F3\"],\n";
    echo "\t\t\t\t\tlineWidth: 3,\n";
    echo "\t\t\t\t\tlegend: {\n";
    echo "\t\t\t\t\t\tposition: \"none\"\n";
    echo "\t\t\t\t\t},\n";
    echo "\t\t\t\t\thAxis: {\n";
    echo "\t\t\t\t\t\tpointSize: 2,\n";
    echo "\t\t\t\t\t\tformat: 'MMM d',\n";
    echo "\t\t\t\t\t\ttitle: '',\n";
    echo "\t\t\t\t\t\ttitlePosition: 'none'\n";
    echo "\t\t\t\t\t},\n";
    echo "\t\t\t\t\tvAxis: {\n";
    echo "\t\t\t\t\t\ttitle: 'Capital (USD)'\n";
    echo "\t\t\t\t\t}\n";
    echo "\t\t\t\t}\n";
    echo "\t\t\t\tvar chart = new google.charts.Line(document.getElementById('jaime-montoya-capital'));\n";
    echo "\t\t\t\tchart.draw(data, google.charts.Line.convertOptions(options));\n";
    echo "\t\t\t};";
    

	
	echo "\t\t\tfunction barMouseOver(e) {\n";
	echo "\t\t\t\tchart.setSelection([e]);\n";
	echo "\t\t\t}\n";
	echo "\t\t\tfunction barMouseOut(e) {\n";
	echo "\t\t\tchart.setSelection([{'row': null, 'column': null}]);\n";
	echo "\t\t\t}\n";
	echo "\t\t</script>\n";
  }  
}
?>