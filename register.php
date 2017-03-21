<?php

	include "includes/connection.php";
	if(isset($_POST['Submit'])){
		$name=$conn->real_escape_string(trim($_POST['Name']));
		$email=$conn->real_escape_string(trim($_POST['Email']));
		$password=$conn->real_escape_string(trim($_POST['Password']));
		$mobile=$conn->real_escape_string(trim($_POST['Mobile']));
		

		$str= $conn->query("INSERT INTO `users` (`Name`, `Email`, `Password`, `Mobile`) VALUES ('$name', '$email', '$password', '$mobile');")or die(mysql_error());

		if($str){
			echo "<center><h2>User is succesfully registered...!!!</h2></center>";
		}
		else{
			echo "<center><h2>Something is wronge try again..</h2></center>";
		}

		}
		



?>

<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
<?php include "includes/Navigation.php"; ?>
<br><br><br>
<div id="login_container">
	<form action="register.php" method="post">
	<div id="header">Register</div>
	<div class="field">
		<input type="text" name="Name" placeholder="Enter Your Fullname" class="textbox" required>
	</div>
	<div class="field">
		<input type="email" name="Email" placeholder="Enter Your Email" class="textbox" required>
	</div>
	<div class="field">
		<input type="Password" name="Password" placeholder="Enter Your Password" class="textbox" required>
	</div>
	<div class="field">
		<input type="Password" name="PasswordAgain" placeholder="Enter Your Password Again" class="textbox" required>
	</div>
	<div class="field">
		<input type="text" name="Mobile" placeholder="Enter Your Mobile Number" class="textbox" required>
	</div>
	<div class="field">
		<input type="Submit" name="Submit" value="Register" class="login_btn">
	</div>
	<div class="field"><br>
		<input type="checkbox" name="rememberpassword">Remember my password<br><br>
	</div>
	
	</form>
</div>
</body>
</html>