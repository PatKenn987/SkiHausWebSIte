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
		<h1>WebSiteToDo</h1>
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
			<p>There are several initial uses for this site</p>

			<table border="1">
				<tr>
					<td>1</td>
					<td><a href="todolist/KitchenPlans/KitchenVisualization.pdf" target="_blank">Kitchen Visualizations</a></td>
					<td>Computer simulations of the new kitchen</td>
				</tr>
				<tr>
					<td>2</td>
					<td><a href="todolist/KitchenPlans/Kennedyplans.pdf">Layout and measurements</a></td>
					<td>Detailed measurements and cabinets layout</td>
				</tr>
				<tr>
					<td>3</td>
					<td><a href="todolist/KitchenPlans/2014SGBrochure.pdf">Cabinet Brochure</a></td>
					<td>Brochure for the cabinets  
				</tr>
			</table>
			</p>
			<br />
		</div>
		
		<div class="clear"></div>
	</div>
</body>
</html>