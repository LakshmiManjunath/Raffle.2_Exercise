<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Raffle_Array_Version1</title>
	
	<style>
			body{text-align:center;border:1px solid grey;margin-left:400px;margin-right:400px;}
			h1{background-color:#8181B2;color:white;font-weight:normal;}
			a{border:1px solid grey;text-decoration:none;background-color:#D6D6C2;padding:5px;}
			div{background-color:#B8B8FF;padding-bottom:10px;padding-top:10px;}
			
	</style> 
</head>
<body>
	<h1>RAFFEL</h1>
	<div>
		<?php require 'Raffle_V1_logic.php';?>
		<p><a href="index.php">Play Again</a></p>
	</div>
</body>
</html>