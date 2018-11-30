<?php
session_start();
        if($_SESSION['uid'])
        {
        	
        }
        else
        {
        	header('location: ../login.php');
        }

?>
<?php

//include('header.php');
//include('titlehead.php');

?>


<html>
	<head>
		<link rel="stylesheet" href="../css/add_student.css">
	</head>
<body>
	<div class="page_container">
	<div class="welcomin">Welcome In Admin Dashboard</div>
	<div class="logout_dashboard">
		
		<a href="admindash.php">Dashboard</a>
		<a href="logout.php">Log Out</a>
	</div>
    <div class="form">
		<div class="std_info asd2">insert student info</div>
	<form method="post" action="addstudent.php" enctype="multipart/form-data">
	<input type="text" name="rollno" placeholder="Enter Roll Number">
	<input type="text" name="name" placeholder="Enter Full Name" required/>
	<input type="text" name="city" placeholder="Enter City" required/>
	<input type="number" name="pcont" placeholder="Enter Parents Contact Number">
	<input type="number" name="std" placeholder="Enter Standerd" required/>
	<input type="file" name="simg" placeholder="Upload Image">
	<input type="submit" name="submit" value="submit">
    </form>
	</div>
	</div>
</body>
</html>
<?php

if (isset($_POST['submit'])) {
	
	include('../dbcon.php');
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$pcont=$_POST['pcont'];
	$std=$_POST['std'];
	$imagename = $_FILES['simg']['name'];
	$tempname = $_FILES['simg']['tmp_name'];
	move_uploaded_file($tempname,"../dataimg/$imagename");
	$qry = "INSERT INTO `student`(`rollno`, `namee`, `city`, `pcont`, `standerd`,`imag`) VALUES ('$rollno','$name','$city','$pcont','$std','$imagename')";

	
	$run = mysqli_query($con,$qry); 
	echo $run;
	if ($run==TRUE) {
		?>

		<script>
			alert('Data Inserted Successfully.');
		</script>
		<?php
	}
?>
<?php


}
?>