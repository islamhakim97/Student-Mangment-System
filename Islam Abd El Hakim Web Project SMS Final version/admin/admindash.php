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
		<link rel="stylesheet" href="../css/admin_dash.css">
	</head>
	<body>
</div>

<div class="page_container">
	<div class="welcomin">Welcome In Admin Dashboard</div>
			<div class="container_links">
				<a href="addstudent.php">Insert Student</a>
			<a href="updatestudent.php"> Update Student</a>
			<a href="deletestudent.php">Delete Student</a>
			<a href="logout.php">Log Out</a>
			</div>

</div>
</body>
</html>