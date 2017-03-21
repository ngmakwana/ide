<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
<?php include "includes/Navigation.php"; ?>
<br><br><br>
<div id="login_container">
	<form action="login.php" method="post">
	<div id="header">Login</div>
	<div class="field">
		<input type="text" name="Email" placeholder="Enter Your Email" class="textbox">
	</div>
	<div class="field">
		<input type="Password" name="Password" placeholder="Enter Your Password" class="textbox">
	</div>
	<div class="field">
		<input type="Submit" name="Submit" value="Login" class="login_btn">
	</div>
	<div class="field"><br>
		<input type="checkbox" name="rememberpassword">Remember my password<br><br>
		<a href="ForgetPass.php">Foret Password?</a><br>
	</div>
	
	</form>
</div>
</body>
</html>