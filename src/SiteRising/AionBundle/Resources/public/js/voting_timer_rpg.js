var secs_rpg = 60;
var mins_rpg = 59;
var hours_rpg = 00;
var intervalId = null;

function action_timer_rpg() {
	clearInterval(intervalId);
	document.getElementById("voting_timer_rpg").innerHTML = "Ready !";
}

function voting_timer_rpg() {
	document.getElementById("voting_timer_rpg").innerHTML = hours_rpg +"h:"+mins_rpg+"m:"+secs_rpg+"s";
	
	if ( secs_rpg == 00){
		mins_rpg = mins_rpg - 1;
		secs_rpg = 60;
	}
	
	secs_rpg --;
}

function start_timer_rpg() {
	intervalId = setInterval(voting_timer_rpg, 1000);
	setTimeout(action_timer_rpg, secs_rpg * 1000);
}