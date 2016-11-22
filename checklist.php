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
		<h1>Checklists and information</h1>
	</div>
	<div id="content">
		<div id="sidebar" align "left" width="600px"; style="border:9px solid blue;">
			<?php
			require_once("common/commonMenus.php");
			printSidePane(0);
			?>
		</div>
		
		<div id="main-content">
			<p>
			<p>This page will contain procedures and checklists for the house</p>

			<table border="1">
				<tr>
					<td>1</td>
					<td><a href="Checklist/StartingWaterWhenArriving.pdf">Startup/Close Down instructions for House</a></td>
					<td>Instructions</td>
				</tr>
				<tr>
					<td>2</td>
					<td></td>
					<td></td>
			</tr>
			</table>
			</p>
			<br />
		</div>
		
		<div class="clear"></div>
	</div>
</body>
</html>