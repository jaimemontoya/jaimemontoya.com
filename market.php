<?php
require ("page.php");
class MarketPage extends Page
{
  public function Display()
  {
    echo "<!doctype html>\n<html lang=\"en\">\n\t<head>\n";
	$this -> MarketCharts();
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
  public function MarketCharts()
  {
    echo "\t\t<!--Load the AJAX API-->\n";
    echo "\t\t<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>\n";
	echo "\t\t<script type=\"text/javascript\">\n";
	echo "\t\t\t// Load the Visualization API and the corechart package.\n";
	echo "\t\t\tgoogle.charts.load('current', {'packages':['corechart']});\n";
	echo "\t\t\t// Set a callback to run when the Google Visualization API is loaded.\n";
	echo "\t\t\tgoogle.charts.setOnLoadCallback(drawAppleVsSP500Chart);\n";
	echo "\t\t\t// Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.\n";
	echo "\t\t\tfunction drawAppleVsSP500Chart() {\n";
	echo "\t\t\t\t// Create the data table.\n";
	echo "\t\t\t\tvar data = new google.visualization.DataTable();\n";
	echo "\t\t\t\tdata.addColumn('date', 'X');\n";
    echo "\t\t\t\tdata.addColumn('number', 'Apple');\n";
    echo "\t\t\t\tdata.addColumn('number', 'S&P 500 (SPX)');\n";
	echo "\t\t\t\tdata.addRows([\n";
	echo "\t\t\t\t\t[new Date(2024, 11, 30), 1000, 1000],\n";
	echo "\t\t\t\t\t[new Date(2024, 11, 31), 250.42/252.20*1000, 5881.63/5906.94*1000],\n";
	echo "\t\t\t\t\t[new Date(2025, 0, 1), 250.42/252.20*1000, 5881.63/5906.94*1000],\n";
	echo "\t\t\t\t\t[new Date(2025, 0, 2), 243.85/252.20*1000, 5868.55/5906.94*1000],\n";
	echo "\t\t\t\t\t[new Date(2025, 0, 3), 243.36/252.20*1000, 5942.47/5906.94*1000],\n";
	echo "\t\t\t\t\t[new Date(2025, 0, 4), 243.36/252.20*1000, 5942.47/5906.94*1000],\n";
	echo "\t\t\t\t\t[new Date(2025, 0, 5), 243.36/252.20*1000, 5942.47/5906.94*1000],\n";
	echo "\t\t\t\t\t[new Date(2025, 0, 6), 245.00/252.20*1000, 5975.38/5906.94*1000],\n";
	echo "\t\t\t\t\t[new Date(2025, 0, 7), 242.21/252.20*1000, 5909.03/5906.94*1000],\n";
	echo "\t\t\t\t\t[new Date(2025, 0, 8), 242.70/252.20*1000, 5918.25/5906.94*1000],\n";
	echo "\t\t\t\t\t[new Date(2025, 0, 9), 242.70/252.20*1000, 5918.25/5906.94*1000],\n";
	echo "\t\t\t\t\t[new Date(2025, 0, 10), 236.85/252.20*1000, 5827.04/5906.94*1000],\n";
	echo "\t\t\t\t\t[new Date(2025, 0, 11), 236.85/252.20*1000, 5827.04/5906.94*1000],\n";
	echo "\t\t\t\t\t[new Date(2025, 0, 12), 236.85/252.20*1000, 5827.04/5906.94*1000],\n";
	echo "\t\t\t\t\t[new Date(2025, 0, 13), 234.40/252.20*1000, 5836.22/5906.94*1000],\n";
	echo "\t\t\t\t\t[new Date(2025, 0, 14), 233.28/252.20*1000, 5842.91/5906.94*1000],\n";
	echo "\t\t\t\t\t[new Date(2025, 0, 15), 237.87/252.20*1000, 5949.91/5906.94*1000],\n";
	echo "\t\t\t\t\t[new Date(2025, 0, 16), 228.26/252.20*1000, 5937.34/5906.94*1000],\n";
	echo "\t\t\t\t\t[new Date(2025, 0, 17), 229.98/252.20*1000, 5996.66/5906.94*1000],\n";
	echo "\t\t\t\t\t[new Date(2025, 0, 18), 229.98/252.20*1000, 5996.66/5906.94*1000],\n";
	echo "\t\t\t\t\t[new Date(2025, 0, 19), 229.98/252.20*1000, 5996.66/5906.94*1000],\n";
	echo "\t\t\t\t\t[new Date(2025, 0, 20), 229.98/252.20*1000, 5996.66/5906.94*1000],\n";
	echo "\t\t\t\t\t[new Date(2025, 0, 21), 222.64/252.20*1000, 6049.24/5906.94*1000],\n";
	echo "\t\t\t\t\t[new Date(2025, 0, 22), 223.83/252.20*1000, 6086.37/5906.94*1000],\n";
	echo "\t\t\t\t\t[new Date(2025, 0, 23), 223.66/252.20*1000, 6118.71/5906.94*1000],\n";
	echo "\t\t\t\t\t[new Date(2025, 0, 24), 222.78/252.20*1000, 6101.24/5906.94*1000],\n";
	echo "\t\t\t\t\t[new Date(2025, 0, 25), 222.78/252.20*1000, 6101.24/5906.94*1000],\n";
	echo "\t\t\t\t\t[new Date(2025, 0, 26), 222.78/252.20*1000, 6101.24/5906.94*1000],\n";
	echo "\t\t\t\t]);\n";
	echo "\t\t\t\t// Set chart options\n";
	echo "\t\t\t\tvar options = {chart:{'title':'Performance comparison: Apple Vs. S&P 500 (SPX)',subtitle:'in dollars (USD)'}};\n";
	
	//echo "\t\t\t\tvar chart = new google.charts.Line(document.getElementById('apple-vs-sp500'));\n";
    //echo "\t\t\t\tchart.draw(data, google.charts.Line.convertOptions(options));\n";
	
	echo "\t\t\t\tvar chart = new google.visualization.LineChart(document.getElementById('apple-vs-sp500'));\n";
    echo "\t\t\t\tchart.draw(data, options);\n";

	
	/*echo "\t\t\t\tbarsVisualization = new google.visualization.ColumnChart(document.getElementById('apple-vs-sp500'));\n";
	echo "\t\t\t\tbarsVisualization.draw(data, options);\n";*/
	echo "\t\t\t\t// Add our over/out handlers.\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseover', barMouseOver);\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseout', barMouseOut);\n";
	echo "\t\t\t}\n";
	echo "\t\t\tfunction barMouseOut(e) {\n";
	echo "\t\t\t\tchart.setSelection([{'row': null, 'column': null}]);\n";
	echo "\t\t\t}\n";
	echo "\t\t</script>\n";
  }
}
?>