<!DOCTYPE html>
<html>
<head>
	<title>View Report</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="title"><center><h1>REPORT</h1></center></div>
	<form method="post">
		<div class="container">
			<center>Date : <input type="date" name="date">
				<input type="submit" name="submitdate"></center>
		</div>
		<br><br>
		<center>
			<input type="submit" name="total" value="View total attendance">
		</center>
		<br><br><br>
	</form>
</body>
</html>
<?php
	$db=mysqli_connect("localhost","root","");
	mysqli_select_db($db,"ams");
	if(isset($_POST['submitdate']))
	{
		$date=$_POST['date'];
		$query="SELECT * FROM attendance WHERE datee='".$date."';";
		$result=mysqli_query($db,$query);
		$check=mysqli_num_rows($result);
		if($check>0) {
			echo "<center><table border=2>";
			echo "<tr> <th>Date</th> <th>Saravana Kumar</th> <th>Shanmuga sundar</th> <th>Subramanian</th> <th>Ranjith Kumar</th> <th>Ravi Kumar</th> <th>Raj</th> <th>Surdeep</th> <th>Shabesh</th> <th>Yukesh</th> <th>Sivaselvan</th> <th>Vijay Nigilesh</th> <th>Sivaram</th> <th>Vignesh</th> </tr>";
		while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr> <td>";
				echo $row['datee'];
				echo "</td> <td>";
				echo $row['saravana'];
				echo "</td> <td>";
				echo $row['shanmuga'];
				echo "</td> <td>";
				echo $row['subramanian'];
				echo "</td> <td>";
				echo $row['ranjith'];
				echo "</td> <td>";
				echo $row['ravi'];
				echo "</td> <td>";
				echo $row['raj'];
				echo "</td> <td>";
				echo $row['surdeep'];
				echo "</td> <td>";
				echo $row['shabesh'];
				echo "</td> <td>";
				echo $row['yukesh'];
				echo "</td> <td>";
				echo $row['sivaselvan'];
				echo "</td> <td>"; 
				echo $row['vijay'];
				echo "</td> <td>";
				echo $row['sivaram'];
				echo "</td> <td>";
				echo $row['vignesh'];
				echo "</td> </td> </tr>"; 
			}
			echo "</table></center>";
		}
	}
	if(isset($_POST['total']))
	{
		$query="SELECT SUM(saravana) as 'tsaravana',SUM(shanmuga) as 'tshanmuga',SUM(subramanian) as 'tsubramanian',SUM(ranjith) as 'tranjith',SUM(ravi) as 'travi',SUM(raj) as 'traj',SUM(surdeep) as 'tsurdeep',SUM(shabesh) as 'tshabesh',SUM(yukesh) as 'tyukesh',SUM(sivaselvan) as 'tsivaselvan',SUM(vijay) as 'tvijay',SUM(sivaram) as 'tsivaram',SUM(vignesh) as 'tvignesh' FROM attendance;";
		$result=mysqli_query($db,$query);
		$data=mysqli_fetch_assoc($result);
		$check=mysqli_num_rows($result);
		if($check>0)
		{
			echo "<center><table border=2>";
			echo "<tr> <th>Saravana Kumar</th> <th>Shanmuga sundar</th> <th>Subramanian</th> <th>Ranjith Kumar</th> <th>Ravi Kumar</th> <th>Raj</th> <th>Surdeep</th> <th>Shabesh</th> <th>Yukesh</th> <th>Sivaselvan</th> <th>Vijay Nigilesh</th> <th>Sivaram</th> <th>Vignesh</th> </tr>";
			echo "<tr> <td>";
			echo $data['tsaravana'];
			echo "</td> <td>";
			echo $data['tshanmuga'];
			echo "</td> <td>";
			echo $data['tsubramanian'];
			echo "</td> <td>";
			echo $data['tranjith'];
			echo "</td> <td>";
			echo $data['travi'];
			echo "</td> <td>";
			echo $data['traj'];
			echo "</td> <td>";
			echo $data['tsurdeep'];
			echo "</td> <td>";
			echo $data['tshabesh'];
			echo "</td> <td>";
			echo $data['tyukesh'];
			echo "</td> <td>";
			echo $data['tsivaselvan'];
			echo "</td> <td>";
			echo $data['tvijay'];
			echo "</td> <td>";
			echo $data['tsivaram'];
			echo "</td> <td>";
			echo $data['tvignesh'];
			echo "</td> <td> </tr></table></center>";
		}
	}
?>