<?php
require ("page.php");
class RunningPage extends Page
{
  public function Display()
  {
    echo "<!doctype html>\n<html lang=\"en\">\n\t<head>\n";
	$this -> RunningCharts();
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
    echo "\t\t<div class=\"container-running\">\n";
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
  public function RunningCharts()
  {
    echo "\t\t<!--Load the AJAX API-->\n";
    echo "\t\t<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>\n";
	echo "\t\t<script type=\"text/javascript\">\n";
	echo "\t\t\t// Load the Visualization API and the corechart package.\n";
	echo "\t\t\tgoogle.charts.load('current', {'packages':['corechart']});\n";
	echo "\t\t\t// Set a callback to run when the Google Visualization API is loaded.\n";
	echo "\t\t\tgoogle.charts.setOnLoadCallback(drawRunningChartAllYears);\n";
	echo "\t\t\tgoogle.charts.setOnLoadCallback(drawRunningChart2024);\n";
	echo "\t\t\tgoogle.charts.setOnLoadCallback(drawRunningChart2023);\n";
	echo "\t\t\tgoogle.charts.setOnLoadCallback(drawRunningChart2022);\n";
	echo "\t\t\t// Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.\n";
	echo "\t\t\tfunction drawRunningChartAllYears() {\n";
	echo "\t\t\t\t// Create the data table.\n";
	echo "\t\t\t\tvar data = new google.visualization.DataTable();\n";
	echo "\t\t\t\tdata.addColumn('string', 'Year');\n";
	echo "\t\t\t\tdata.addColumn('number', 'Km');\n";
	echo "\t\t\t\tdata.addRows([\n";
	echo "\t\t\t\t\t['2020',746.4],\n";
	echo "\t\t\t\t\t['2021',2101.0],\n";
	echo "\t\t\t\t\t['2022',1575.0],\n";
	echo "\t\t\t\t\t['2023',1698.8],\n";
	echo "\t\t\t\t\t['2024',294.1] // 133.4+74.7+81.0+5.0\n";
	echo "\t\t\t\t]);\n";
	echo "\t\t\t\t// Set chart options\n";
	echo "\t\t\t\tvar options = {'title':'Jaime Montoya\'s running history by year'};\n";
	echo "\t\t\t\tbarsVisualization = new google.visualization.ColumnChart(document.getElementById('running-all-years'));\n";
	echo "\t\t\t\tbarsVisualization.draw(data, options);\n";
	echo "\t\t\t\t// Add our over/out handlers.\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseover', barMouseOver);\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseout', barMouseOut);\n";
	echo "\t\t\t}\n";
	echo "\t\t\tfunction drawRunningChart2024() {\n";
	echo "\t\t\t\t// Create the data table.\n";
	echo "\t\t\t\tvar data = new google.visualization.DataTable();\n";
	echo "\t\t\t\tdata.addColumn('string', 'Month');\n";
	echo "\t\t\t\tdata.addColumn('number', 'Km');\n";
	echo "\t\t\t\tdata.addRows([\n";
	echo "\t\t\t\t\t['Jan',133.4],\n";
	echo "\t\t\t\t\t['Feb',74.7],\n";
	echo "\t\t\t\t\t['Mar',81.0],\n";
	echo "\t\t\t\t\t['Apr',5.0]\n";
	echo "\t\t\t\t]);\n";
	echo "\t\t\t\t// Set chart options\n";
	echo "\t\t\t\tvar options = {'title':'Jaime Montoya\'s 2024 running history by month'};\n";
	echo "\t\t\t\tbarsVisualization = new google.visualization.ColumnChart(document.getElementById('running-2024'));\n";
	echo "\t\t\t\tbarsVisualization.draw(data, options);\n";
	echo "\t\t\t\t// Add our over/out handlers.\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseover', barMouseOver);\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseout', barMouseOut);\n";
	echo "\t\t\t}\n";
	echo "\t\t\tfunction drawRunningChart2023() {\n";
	echo "\t\t\t\t// Create the data table.\n";
	echo "\t\t\t\tvar data = new google.visualization.DataTable();\n";
	echo "\t\t\t\tdata.addColumn('string', 'Month');\n";
	echo "\t\t\t\tdata.addColumn('number', 'Km');\n";
	echo "\t\t\t\tdata.addRows([\n";
	echo "\t\t\t\t\t['Jan',131.7],\n";
	echo "\t\t\t\t\t['Feb',230.7],\n";
	echo "\t\t\t\t\t['Mar',188.6],\n";
	echo "\t\t\t\t\t['Apr',108.1],\n";
	echo "\t\t\t\t\t['May',128.2],\n";
	echo "\t\t\t\t\t['Jun',149.0],\n";
	echo "\t\t\t\t\t['Jul',134.1],\n";
	echo "\t\t\t\t\t['Aug',116.1],\n";
	echo "\t\t\t\t\t['Sep',83.97],\n";
	echo "\t\t\t\t\t['Oct',158.8],\n";
	echo "\t\t\t\t\t['Nov',142.7],\n";
	echo "\t\t\t\t\t['Dec',127.0]\n";
	echo "\t\t\t\t]);\n";
	echo "\t\t\t\t// Set chart options\n";
	echo "\t\t\t\tvar options = {'title':'Jaime Montoya\'s 2023 running history by month'};\n";
	echo "\t\t\t\tbarsVisualization = new google.visualization.ColumnChart(document.getElementById('running-2023'));\n";
	echo "\t\t\t\tbarsVisualization.draw(data, options);\n";
	echo "\t\t\t\t// Add our over/out handlers.\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseover', barMouseOver);\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseout', barMouseOut);\n";
	echo "\t\t\t}\n";
	echo "\t\t\tfunction drawRunningChart2022() {\n";
	echo "\t\t\t\t// Create the data table.\n";
	echo "\t\t\t\tvar data = new google.visualization.DataTable();\n";
	echo "\t\t\t\tdata.addColumn('string', 'Month');\n";
	echo "\t\t\t\tdata.addColumn('number', 'Km');\n";
	echo "\t\t\t\tdata.addRows([\n";
	echo "\t\t\t\t\t['Jan',225.5],\n";
	echo "\t\t\t\t\t['Feb',58.05],\n";
	echo "\t\t\t\t\t['Mar',14.34],\n";
	echo "\t\t\t\t\t['Apr',45.65],\n";
	echo "\t\t\t\t\t['May',91.13],\n";
	echo "\t\t\t\t\t['Jun',76.59],\n";
	echo "\t\t\t\t\t['Jul',193.8],\n";
	echo "\t\t\t\t\t['Aug',239.9],\n";
	echo "\t\t\t\t\t['Sep',163.2],\n";
	echo "\t\t\t\t\t['Oct',249.1],\n";
	echo "\t\t\t\t\t['Nov',119.7],\n";
	echo "\t\t\t\t\t['Dec',97.75]\n";
	echo "\t\t\t\t]);\n";
	echo "\t\t\t\t// Set chart options\n";
	echo "\t\t\t\tvar options = {'title':'Jaime Montoya\'s 2023 running history by month'};\n";
	echo "\t\t\t\tbarsVisualization = new google.visualization.ColumnChart(document.getElementById('running-2023'));\n";
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