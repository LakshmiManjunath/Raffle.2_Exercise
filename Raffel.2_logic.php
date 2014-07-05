<?php
	$winning_number = 4;
	$j=0;
	foreach($_POST as $i => $player)
	{
		if(empty($player)){$j+=1;}
	}
	
	if($j>0)
		{echo 'Enter all the participants name <br>';}
	else 
	{
		foreach($_POST as $i => $player)
		{
			$i = rand(1,4);
			if($i == $winning_number)
			{
				echo $player.'&#39s number is:'.$i.' and is a Winner!!<br>';
			}
			else
			{	
				echo $player.'&#39s number is:'.$i.' and just lost this round :( <br>';
			}
		}	
	}
	
?>