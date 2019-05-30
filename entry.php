<?php  
	$db=mysqli_connect("localhost","root","");
	mysqli_select_db($db,"ams");

	$saravana=$_POST['saravana'];
	$shanmuga=$_POST['shanmuga'];
	$subramanian=$_POST['subramanian'];
	$ranjith=$_POST['ranjith'];
	$ravi=$_POST['ravi'];
	$raj=$_POST['raj'];
	$surdeep=$_POST['surdeep'];
	$shabesh=$_POST['shabesh'];
	$yukesh=$_POST['yukesh'];
	$sivaselvan=$_POST['sivaselvan'];
	$vijay=$_POST['vijay'];
	$sivaram=$_POST['sivaram'];
	$vignesh=$_POST['vignesh'];

	$query="INSERT INTO attendance (datee,saravana,shanmuga,subramanian,ranjith,ravi,raj,surdeep,shabesh,yukesh,sivaselvan,vijay,sivaram,vignesh) VALUES (CURRENT_DATE(),'$saravana','$shanmuga','$subramanian','$ranjith','$ravi','$raj','$surdeep','$shabesh','$yukesh','$sivaselvan','$vijay','$sivaram','$vignesh')";
	$db->query($query);
	header("Location:attendance.php");
?>