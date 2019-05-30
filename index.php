<!DOCTYPE html>
<html>
<head>
	<title>
		Attendance Management
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="logo">
	</div>

<!--Login-->
	<div class="loginbox">
		<img src="login.jpg" class="loginimage">
		<h1>Login</h1>
		<form name="loginform" action="login_user.php" onsubmit="return validate()" method="post">
			<p>Username or email</p>
			<input type="text" name="username"
			placeholder="Enter username or email">
			<p>Password</p>
			<input type="Password" name="password"
			placeholder="Enter Password">
			<input type="Submit" name="login" value="Login">
			<p><a href="signup.php">Dont have an account?</a></p>
			<p><a href="#">Forgot password?</a></p>
		</form>
		<div class="viewmap">
		<a href="map.html"><input type="submit" name="map" value="View College Map"></a>
	</div>
	</div>
	


<!--script.js for validation>
	<script>
		function validate() {
			var x=document.forms["loginform"]["username"].value;
			var y=document.forms["loginform"]["password"].value;
			if(x=="") {
				alert("Name must be filled out");
				return false;
			}
			if(y=="") {
				alert("Password must be filled");
				return false;
			}
			alert("Welcome "+x+"..!!");
			return true;
		}
	</script>
-->
</body>
</html>