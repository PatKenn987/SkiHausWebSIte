<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
	include("common/commonMenus.php");
	include("common/common.php");
?>
<head>
	<title>Catskill Web Site</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/catskill.css" />
	<?php
	define('ROOT_PATH', dirname(__DIR__) . '/');

	?> 
</head>
<body>
  <div>
	<div id="header";  style="border:9px solid blue;">
		<h1>Catskill Web Site</h1>
	</div>
	<div id="content">
		<div id="sidebar" align "left" width="400px"; style="border:9px solid blue;">
			<?php
			printSidePane(0);
								
			// outputs e.g. 'Last modified: March 04 1998 20:43:59.'
			echo "Last modified: " . date ("F d Y H:i:s.", get_page_mod_time());
			echo "\r\n";
			?>
			<?php /* Accuweather widget*********************************************************************/ ?> 
			<a href="http://www.accuweather.com/en/us/jewett-ny/12442/ski-current-weather/2103198" class="aw-widget-legal">
			<!--
			By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
			-->
			</a><div id="awtd1458685072496" class="aw-widget-36hour"  data-locationkey="" data-unit="f" data-language="en-us" data-useip="true" data-uid="awtd1458685072496" data-editlocation="true" data-lifestyle="ski"></div><script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
			<?php /**********************************************************************/ ?> 
		</div>
		
		<div id="main-content" style="border:9px solid blue;">
		
			<p>
			<p>Welcome to the Kennedy Family Ski Haus web site.</p>

			<table border="1">
				<tr>
					<td>1</td>
					<td><a href="http://www.thruway.ny.gov/travelers/map/index.html?layer=traffic">Thruway Traffic</a></td>
					<td>Traffic Site</td>
				</tr>
				<tr>
					<td>2</td>
					<td><a href="https://maps.google.com/maps?saddr=West+Islip,+NY&daddr=Jewet+NY&hl=en&sll=42.746632,-75.770041&sspn=4.340377,10.821533&geocode=FaIgbQIdim-h-ylTiv6Cai3oiTHCI4d0cu_PJw%3BFZz-hAIdNTqS-ym7oz0A203ciTGB1slHKKFXTQ&mra=ls&t=m&z=8&layer=t">Google Traffic</a></td>
					<td>Traffic Site</td>
				</tr>
				<tr>
					<td>3</td>
					<td><a href="http://www.trails.com/tcatalog_trail.aspx?trailid=HGN065-036">Colgate Lake</a></td>
					<td>Trail Maps</td>
				</tr>
				<tr>
					<td>4</td>
					<td><a href="Hiking/Hiking2014.html">Hiking</a></td>
					<td>Catskill Hiking</td>
				</tr>				
			</table>
			<?php echo "\r\n"; ?>
			</p>
			<br />
		</div>
 </div>




 <footer id="foot01"></footer>
	</div>  
	 <script src="Script.js"></script>
</body>
</html>






