function checkFields(){
	var usr = document.getElementById('usr').value;
	var psw = document.getElementById('psw').value;
	if(usr.length >= 3 && psw.length >= 3)
		document.getElementById('ent').disabled = false;
	else
		document.getElementById('ent').disabled = true;
}