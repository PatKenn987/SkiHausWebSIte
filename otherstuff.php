<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Catskill Web Site</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/catskill.css" />
</head>
<body>
  <div>
	<div id="header";  style="border:9px solid blue;">
		<h1>Other Stuff</h1>
	</div>
	<div id="content">
		<div id="sidebar" align "left" width="600px"; style="border:9px solid blue;">
			<?php
			//This is for debugging/development when I am using the XAAMP and the
			//local host server on my dev machine
			$var2 = "localhost";
			if(strcmp($_SERVER["SERVER_NAME"], $var2) ==0)
			{
				include($_SERVER["DOCUMENT_ROOT"] . '/CatskillSite/common/commonMenus.php');
			}
			else
			{
				include($_SERVER["DOCUMENT_ROOT"] . 'common/commonMenus.php');				
			}
			printSidePane(0);
			?>
		</div>
		
		<div id="main-content">
			<p>
			<p>This section of the web site is just personal stuff that I had on another server once upon a time</p>

			<table border="1">
				<tr>
					<td>1</td>
					<td><a href="OtherStuff/Gardening/gardenstuff.php">Gardening</a></td>
					<td>Some notes on my gardening project </td>
				</tr>
				<tr>
					<td>2</td>
					<td><a href="OtherStuff/Travel/TravelHome.php">Travel</a></td>
					<td>Notes from Travel and adventures that we have had</td>
				</tr>
				<tr>
					<td>3</td>
					<td><a href="OtherStuff/Music/Guitar.php">Music</a></td>
					<td>List of songs</td>
				</tr>	
				<tr>
					<td>4</td>
					<td><a href="OtherStuff/Goals/Goals.php">Goals</a></td>
					<td>My Goals over the years</td>
				</tr>	

				<tr>
					<td>5</td>
					<td><a href="OtherStuff/Woodworking/Woodworking.php">Woodworking Projects</a></td>
					<td>Woodworking Projects</td>
				</tr>
				
				<tr>
					<td>6</td>
					<td><a href="OtherStuff/TechnicalProjects/TechProjects.php">Geek Projects</a></td>
					<td>Various Notes on Electronic projects over the years.</td>
				</tr>
				<tr>
					<td>7</td>
					<td><a href="OtherStuff/Sailing/Sailing.php">Sailing Notes</a></td>
					<td>Notes, cools websites, etc on sailing</td>
				</tr>				
				<tr>
					<td>8</td>
					<td><a href="OtherStuff/History/History.php">History Page</a></td>
					<td>Notes on History and Audio Books</td>
				</tr>				
				<tr>
					<td>9</td>
					<td><a href="OtherStuff/Hiking/Hiking.php">Hiking Page</a></td>
					<td>Writeups of my Hiking adventures in the Catskill</td>
				</tr>	
			</table>
			</p>
			<br />
		</div>
		
		<div class="clear"></div>
	</div>
</body>
</html>