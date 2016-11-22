
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
			printSidePane(0);
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
			
			//Collect and store the information for the Temperature/Humidity Table
			//Get the 
			/*
			if($result!==FALSE){
				$row = mysql_fetch_array($result);
			}
			if($result1!==FALSE){
				$row1 = mysql_fetch_array($result1);
			}
			?>
			
			<table border="1">
				<tr>
					<th>Current Basement Temp</th>
					<td><?php printf("%s", $row["temperature"])?></td>
					<th>Current Humidity</th>
					<td><?php printf("%s", $row["humidity"])  ?></td>
					<?php
					if (!mysql_data_seek($result, 0)) {
						echo "Cannot seek to row 1: " . mysql_error() . "\n";
						continue;
					}
					?>
					<th>Current Boiler Temp</th>
				    <td><?php printf("%s", $row1["temperature"])?></td> 
				</tr>
				<tr>
					<th>Max Temp</a></th>
					<td><?php printf("%s", GetMaxTemp())?></td>
					<th>Max Humidity</th>
					<td><?php printf("%s", GetMaxHumidity())?></td>
					<th>Max Hot Tub Temp</th>
					<td><?php printf("%s", GetMaxHotTubTemp())?></td>
				</tr>
				<tr>
					<th>Min Temp</a></th>
					<td><?php printf("%s", GetMinTemp())?></td>
					<th>Min Humidity</th>
					<td><?php printf("%s", GetMinHumidity())?></td>
					<th>Min Hot Tub Temp</th>
					<td><?php printf("%s", GetMinHotTubTemp())?></td>
				</tr>
			</table>
			*/
			?>
			<div id="main-content-left">
			<?php
			/*
			<h2>Basement Temp/Hum </h2>
			   <table border="1" cellspacing="1" cellpadding="1">
					<tr>
						<td>&nbsp;Timestamp&nbsp;</td>
						<td>&nbsp;Temp&nbsp;</td>
						<td>&nbsp;Hum&nbsp;</td>
					</tr>

				  //<?php 
					  if($result!==FALSE){
						 while($row = mysql_fetch_array($result)) {
							printf("<tr><td> &nbsp;%s </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td></tr>", 
							$row["timeStamp"], $row["temperature"], $row["humidity"]);
						 }
						 mysql_free_result($result);
					  }
				  ?>
				</table>*/
			?>
			</div>
			
			<div id="main-content-right">
			<?php
			/*
			<h2>Hot Tub Temp</h2>
			   <table border="1" cellspacing="1" cellpadding="1">
					<tr>
						<td>&nbsp;Timestamp&nbsp;</td>
						<td>&nbsp;Temp&nbsp;</td>
					</tr>

				  //<?php 
					  if($result!==FALSE){
						 while($row1 = mysql_fetch_array($result1)) {
							printf("<tr><td> &nbsp;%s </td><td> &nbsp;%s&nbsp; </td></tr>", 
							$row1["timeStamp"], $row1["temperature"]);
						 }
						 mysql_free_result($result1);
					  }
				  ?>
				</table>
				<br /> */
				?>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</body>
</html>


<?php
function GetMaxTemp()
{
	//Set up the connection
	$link=Connection();
	global $StartDate;

	//Query 
	//$sqlString = "SELECT * FROM `tempLog` WHERE timeStamp > '$StartDate' ORDER BY `timeStamp` DESC";

    $sql = "SELECT MAX(temperature) AS MaxTemp FROM tempLog WHERE timeStamp > '$StartDate'";
	$result1 = mysql_query($sql, $link);
	if (!$result1) {
		echo "DB Error, could not query the database\n";
		echo 'MySQL Error: ' . mysql_error();
		exit;
	}
	//Collect and store the information for the Temperature/Humidity Table
	//Get the 
	if($result1!==FALSE){
		$rowMaxTemp = mysql_fetch_array($result1);
	}
	mysql_close($link);
	return $rowMaxTemp["MaxTemp"];
}

function GetMinTemp()
{
	//Set up the connection
	$link=Connection();
	global $StartDate;
	//Query 
    $sql = "SELECT MIN(temperature) AS MaxTemp FROM tempLog WHERE timeStamp > '$StartDate'";
	//trigger_error("Value must be 1 or below");
	//throw new Exception("Value must be 1 or below");
	//echo($sql);
	$result1 = mysql_query($sql, $link);
	if (!$result1) {
		echo "DB Error, could not query the database\n";
		echo 'MySQL Error: ' . mysql_error();
		exit;
	}
	//Collect and store the information for the Temperature/Humidity Table
	//Get the 
	if($result1!==FALSE){
		$rowMaxTemp = mysql_fetch_array($result1);
	}
	mysql_close($link);
	return $rowMaxTemp["MaxTemp"];
}

function GetMaxHumidity()
{
	//Set up the connection
	$link=Connection();
	global $StartDate;

	//Query 
    $sql = "SELECT MAX(humidity) AS MaxHumidity FROM tempLog WHERE timeStamp > '$StartDate'";
	$result1 = mysql_query($sql, $link);
	if (!$result1) {
		echo "DB Error, could not query the database\n";
		echo 'MySQL Error: ' . mysql_error();
		exit;
	}
	//Collect and store the information for the Temperature/Humidity Table
	//Get the 
	if($result1!==FALSE){
		$rowMaxHumidity = mysql_fetch_array($result1);
	}
	mysql_close($link);
	return $rowMaxHumidity["MaxHumidity"];
}

function GetMinHumidity()
{
	//Set up the connection
	$link=Connection();
	global $StartDate;

	//Query 
    $sql = "SELECT MIN(humidity) AS MinHumidity FROM tempLog WHERE timeStamp > '$StartDate'";
	$result1 = mysql_query($sql, $link);
	if (!$result1) {
		echo "DB Error, could not query the database\n";
		echo 'MySQL Error: ' . mysql_error();
		exit;
	}
	//Collect and store the information for the Temperature/Humidity Table
	//Get the 
	if($result1!==FALSE){
		$rowMinHumidity = mysql_fetch_array($result1);
	}
	mysql_close($link);
	return $rowMinHumidity["MinHumidity"];
}

function GetMaxHotTubTemp()
{
	//Set up the connection
	$link=Connection();
	global $StartDate;
	//Query 
    $sql = "SELECT MAX(temperature) AS MaxTemp FROM HotTubTempLog WHERE timeStamp > '$StartDate'";
	$result1 = mysql_query($sql, $link);
	if (!$result1) {
		echo "DB Error, could not query the database\n";
		echo 'MySQL Error: ' . mysql_error();
		exit;
	}
	//Collect and store the information for the Temperature/Humidity Table
	//Get the 
	if($result1!==FALSE){
		$rowMaxTemp = mysql_fetch_array($result1);
	}
	mysql_close($link);
	return $rowMaxTemp["MaxTemp"];
}
function GetMinHotTubTemp()
{
	//Set up the connection
	$link=Connection();
	global $StartDate;
	//Query 
    $sql = "SELECT MIN(temperature) AS MinTemp FROM HotTubTempLog WHERE timeStamp > '$StartDate'";
	$result1 = mysql_query($sql, $link);
	if (!$result1) {
		echo "DB Error, could not query the database\n";
		echo 'MySQL Error: ' . mysql_error();
		exit;
	}
	//Collect and store the information for the Temperature/Humidity Table
	//Get the 
	if($result1!==FALSE){
		$rowMinTemp = mysql_fetch_array($result1);
	}
	mysql_close($link);
	return $rowMinTemp["MinTemp"];
}
?>


