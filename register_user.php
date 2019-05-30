<?php
		 	$firstname=$_POST['firstname'];
		 	$lastname=$_POST['lastname'];
		 	$gender=$_POST['gender'];
		 	$mail=$_POST['mail'];
		 	$password=md5($_POST['password']);
		 	$dob=$_POST['dob'];
			$db=mysqli_connect("localhost","root","");
			mysqli_select_db($db,"ams");
			$db->query("INSERT INTO users (firstname,lastname,gender,mail,password,dob) VALUES ('$firstname','$lastname','$gender','$mail','$password','$dob')");
			//$firstname,$lastname,$gender,$mail,$password,$dob
			header('Location:index.php');
?>
