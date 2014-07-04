<?php	
/* Array1 */
	$player['Lean'] = '';
	$player['Ana'] = '';
	$player['Max'] = '';
	$player['Maya'] = '';
	$player['Vevan'] = '';

	$winner = 0;
	$looser = 0;
	foreach( $player as $Name => $result){
		$result = rand(0,1);
		if($result == 0)
			{ echo $Name.' is a Looser :(<br>';$looser+=1;}
		else
			{ echo $Name.' is a Winner! <br>'; $winner+=1;}
	}
	if($winner > 1){ echo '<br> Its a tie!! :|<br>';}
	if($winner == 0) { echo '<br> There are no winners this time ;) <br>';}
?>