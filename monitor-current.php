
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
	// Set up the initial value of the data range
	$DateRange = "1Week";
	//If there is a POST from the Time Span selector, then put in the 
	//selected data range.
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$DateRange = $_POST["TimeSpan"];
	}
?>

<?php

	include("common/connect.php"); 	
	//Set up the connection
	$link=Connection();
	
	//Get today's date in numeric format
	$Today = strtotime("today");	
	//echo "Today is " .$Today  . "<br>";
	//Depending on the current Time Span selection, calculate the 
	//date to start retrieving data.
	switch($DateRange){
		case "1Week":
			$Temp = strtotime("-1 week", $Today);
			$StartDate= date("Y-m-d h:i:sa", $Temp);
		break;
		case "2Week":
			$Temp = strtotime("-2 week", $Today);
			$StartDate= date("Y-m-d h:i:sa", $Temp);
		break;
		case "4Week":
			$Temp = strtotime("-4 week", $Today);
			$StartDate= date("Y-m-d h:i:sa", $Temp);
		break;
		case "All":
			$StartDate= "";
		break;
	}
	
	//echo date("Y-m-d h:i:sa", $StartDate) . "<br>";
	//Read in the entire table
	$sqlString = "SELECT * FROM `tempLog` WHERE timeStamp > '$StartDate' ORDER BY `timeStamp` DESC";
	//echo($sqlString);
	//echo("<br>");
	//Get the Basement Temperature list of values
	$result=mysql_query($sqlString,$link);	
	$sqlString1 = "SELECT * FROM `HotTubTempLog`WHERE timeStamp > '$StartDate' ORDER BY `timeStamp` DESC";
	//echo($sqlString1);
	//echo("<br>");
	$result1=mysql_query($sqlString1,$link);	
	mysql_close($link);
?>

<head>
	<title>Catskill Web Site</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/catskill.css" />
</head>

<body>
  <div>
	<div id="header";  style="border:9px solid blue;">
		<h1>Monitoring</h1>
	</div>
	<div id="content">
		<div id="sidebar">
			<?php
			require_once("common/commonMenus.php");
			printSidePane();
			?>
		</div>
		<div id="main-content">

		<p>Remote monitoring for the house</p>
			<table border="1">
				<tr>
					<td>1</td>
					<td><a href="https://rs.alarmnet.com/TotalConnectComfort/" target="_blank">Remote Thermostat</a></td>
					<td>A warm house when you arrive</td>
				</tr>
				<tr>
					<td>2</td>
					<td><a href="http://skihaus.nightowldvr.com:2049/#/liveView.rsp">Remote Cameras</a></td>
					<td>Peeping Tom  
					<br>
					</td>
				</tr>
				<tr>
					<td>3</td>
					<td><a href="http://www.wunderground.com/weather-forecast/US/NY/Jewett.html">Weather</a></td>
					<td>Awesome weather site  
					</td>
				</tr>
			</table>
			<br>
			<br>

			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			    <mylabel>Time Span</mylabel>
				<select name="TimeSpan">
				<option value="1Week">OneWeek</option>
				<option value="2Week">TwoWeeks</option>
				<option value="4Week">FourWeeks</option>
				<option value="All">AllData</option>
				</select>
				<input type="submit">
			</form>
			
			<?php
			require_once("monitor/BasementTemp.php");
			renderBasementTempTable($result);	
			?>
			<?php
			require_once("monitor/BasementData");
			renderBasementData("OneWeek");
			?>
			
	<div class="clear"></div>
	</div>
</body>
</html>





