$(document).ready(function() {
	
	/* EDIT BELOW */
	var launchDate = new Date("August 13, 2010 10:00:00");
	var procentageDone = 50;
	var headerColor = 'yellow';
	var progressFillColor = 'green';
	
	/* DON'T EDIT BELOW */
	var secondsRemaining = Math.floor(launchDate.getTime() / 1000) - Math.floor(new Date().getTime() / 1000);
	countdown(secondsRemaining);
	updateProgress(procentageDone);
	setHeaderColor(headerColor);
	setProgressFillColor(progressFillColor);

});