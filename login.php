<?php
if(isset($_COOKIE['user'])){
	$usr = $_COOKIE['user'];
	$psw = $_COOKIE['password'];
}
else{
	$usr = $_POST['usr'];
	$psw = $_POST['psw'];
	setcookie('user',$usr,0);
	setcookie('password',$psw,0);
}
if(isset($_POST['ext'])){
	$usr = null;
	$psw = null;
	setcookie('user',$usr,-1);
	setcookie('password',$psw,-1);
}
?>	
<html>
<head>
<script type='text/javascript' src='myscript.js'>
</script>
</head>
<body>
<form name='login' method='post' enctype='multipart/form-data'><fieldset>
<?php
if(isset($usr)){
	echo '<p>Welcome,<br>'.$usr.'</p>
	<input type=submit name=ext id=ext value="Its not me">';
}
else
	echo '<legend>Log in</legend>
	<p>User: <input type=text name=usr id=usr onkeyup=checkFields();></p>
	<p>Pass: <input type=text name=psw id=psw onkeyup=checkFields();></p>
	<input type=submit name=ent id=ent value=Enter disabled>';
?>
</fieldset></form>
</body></html>
