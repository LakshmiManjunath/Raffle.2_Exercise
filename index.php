<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Raffle_2</title>
	
	<?php $p1 = isset($_POST['p1'])?$_POST['p1']:''; ?>
	<?php $p2 = isset($_POST['p2'])?$_POST['p2']:''; ?>
	<?php $p3 = isset($_POST['p3'])?$_POST['p3']:''; ?>
	<?php $p4 = isset($_POST['p4'])?$_POST['p4']:''; ?>
	
	<style>
		body{text-align:center;border:1px solid grey;margin-left:400px;margin-right:400px;padding-bottom:20px;}
		h1{background-color:#8181B2;color:white;font-weight:normal;}
		div{background-color:#B8B8FF;padding-bottom:10px;padding-top:10px;}
	</style> 
</head>
<body>
	<h1>RAFFEL.2</h1>
	<div>
	<form action="index.php" method="POST">
		<h3>Enter 4 Raffle Participants </h3>
		
		<p>
			P1:<input type="text" name='p1' value= "<?php echo $p1;?>" ><br>
			P2:<input type="text" name='p2' value= "<?php echo $p2;?>"><br>
			P3:<input type="text" name='p3' value= "<?php echo $p3;?>"><br>
			P4:<input type="text" name='p4' value= "<?php echo $p4;?>"><br>
		<p>
		<p><input type="submit" value="Pick A Winner!"></p>
		<?php require 'Raffel.2_logic.php' ;?>
	</form>
	</div>
</body>
</html>