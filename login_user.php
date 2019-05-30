<?php
	// you have already learned about session
	session_start();
	$conn = mysqli_connect('localhost', 'root', '', 'ams');
	if(mysqli_connect_error())
	{
		echo "<p>Error in connection to database.</p>";
		exit();
	}
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		// checks whether logout button is clicked or not
		// if(isset($_POST["logout"]))
		// {
		// 	// below code is used to destroy all the session
		// 	session_destroy();
		// 	// below code is used to redirect users to codescracker.php page
		// 	header("location: codescracker.php");
		// 	// below code is used to skip executing the remaining code
		// 	// after this
		// 	exit();
		// }
		$username = $_POST["username"];
		$password = md5($_POST["password"]);
		$qry = "SELECT * FROM users WHERE mail='$username' AND password='$password'";
		$res = $conn->query($qry);
		if(mysqli_num_rows($res)>0)
		{
			header("Location:attendance.php");
		}
		else 
		{
			echo "Incorrect username and password";
		}
	}
?>