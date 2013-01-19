function selectStreet(Farbe) {
	window.location.href = 'index.php?street=' + document.getElementById('street').value;
	return true;
}

function reload() {
	history.go(0);
}

function autoRefresh(interval) {
	setTimeout("location.reload(true);",interval);
}
