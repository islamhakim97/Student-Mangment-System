<!DOCTYPE html>
<html>
<head>
	<title>Student Management System</title>
	<link rel="stylesheet"  href="css/home.css">
</head>
<body>
<div class="page_container">
	<div class="welcomin">Welcome To Studenet Management System</div>
	<div class="logout_dashboard">

		<!--<a href="admindash.php">Dashboard</a>-->
				<a href="login.php">Admin Log In</a>
	</div>
<div class="form" style="background-color: #54362c">
	<div class="std_info asd">Search Student</div>


<form method="post" action="index.php">
<div class="level">
	Select Level
</div>
			<select name="std">
				<option value="1">1st</option>
				<option value="2">2nd</option>
				<option value="3">3rd</option>
				<option value="4">4th</option>
			</select>
			<div class="roll_no">
	 Enter Roll number
</div>
		   
			<input type="text" name="rollno" required/>
		<input type="submit" name="submit" value="Show Info">
</form>
</div>
</div>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
	$standard =$_POST['std'];
	$rollno =$_POST['rollno'];
	include('dbcon.php');
	include('function.php');

	showdetails($standard,$rollno);
}
?>