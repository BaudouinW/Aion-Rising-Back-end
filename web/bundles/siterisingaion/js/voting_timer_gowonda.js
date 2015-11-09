var secs_gowonda = 60;
var mins_gowonda = 59;
var hours_gowonda = 01;
var intervalId = null;

function action_time_gowonda() {
	clearInterval(intervalId);
	document.getElementById("voting_timer_gowonda").innerHTML = "Ready !";
}

function voting_timer_gowonda() {
	document.getElementById("voting_timer_gowonda").innerHTML = hours_gowonda +"h:"+mins_gowonda+"m:"+secs_gowonda+"s";
	
	if (mins_gowonda < 1 && secs_gowonda < 1) {
		mins_gowonda = 59;
		secs_gowonda = 60;
		hours_gowonda = hours_gowonda -1;
	}
	
	if ( secs_gowonda == 00){
		mins_gowonda = mins_gowonda - 1;
		secs_gowonda = 60;
	}
	
	secs_gowonda --;
}

function start_timer_gowonda() {
	intervalId = setInterval(voting_timer_gowonda, 1000);
	setTimeout(action_timer_gowonda, secs_gowonda * 1000);
}