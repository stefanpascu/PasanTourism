window.onload = function() {
  pageTimer();
}

function pageTimer() {
	var T;
	var f01;
	if(localStorage.getItem('TotalTime06') == 'NaN'){
		localStorage.setItem('TotalTime06', String('0'));
		f01 = 0;
	} else f01 = parseInt(localStorage.getItem('TotalTime06'));
	T = setInterval(function(){		
		if(localStorage.getItem('TotalTime06') == 'NaN')
			f01 = 0;
		var txt01 = (f01/1000/60).toFixed(0);	
		var txt02 = f01/1000;
		txt02 = txt02 % 60;
		txt02 = txt02.toFixed(0);
		if(txt02 < 30)
			document.getElementById("Time01").innerHTML = "Time spent on this web page: " + String(txt01) + " minutes and " + String(txt02) + " seconds";
		else document.getElementById("Time01").innerHTML = "Time spent on this web page: " + String(txt01 - 1) + " minutes and " + String(txt02) + " seconds";
		f01 = f01 + 1000;
		localStorage.setItem("TotalTime06", String(f01));		
	}, 1000);
}