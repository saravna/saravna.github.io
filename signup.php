<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="signup">
		<img src="login.jpg" class="loginimage">
		<h1>SignUp</h1>	
		<form name="signup" action="register_user.php" method="post">
			
			<p>First Name</p>
			<input type="text" name="firstname" pattern="^[A-Za-z]+" placeholder="FirstName" required>
			<p>Last Name</p>
			<input type="text" name="lastname" pattern="^[A-Za-z]+" placeholder="LastName">
			<p>Gender</p>
			<input type="radio" name="gender" value="male"checked style="width: 10px">Male
			<input type="radio" name="gender" value="female"style="width: 10px">Female
			<p>Email</p>
			<input type="email" name="mail" pattern="/^\w+([\,.]?w+)*@\w+([\,.]?w+)*(\.\w{2,3})+$" placeholder="Mail" required>
			<p>Password</p>
			<input type="password" name="password" pattern="^[A-Za-z0-9]+" placeholder="Password" required>
			<p>DOB</p>
			<input type="date" name="dob">
			<p><a href="index.php">Already have an account?</a></p>
			<input type="submit" name="submit1">

		</form>
	</div>


</body>
</html>	