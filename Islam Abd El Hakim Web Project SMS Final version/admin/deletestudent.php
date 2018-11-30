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
		<link rel="stylesheet" href="../css/delete.css">
	</head>
<body>
<div class="page_container">
	<div class="welcomin">Welcome To Admin DashBoard</div>
	<div class="logout_dashboard">

		<a href="admindash.php">Dashboard</a>
				<a href="logout.php">Log Out</a>
	</div>
<div class="form">
	<div class="std_info asd">Eneter Student you want to delete</div>


<form ation="deletestudent.php" method="post">
	<input type="number" name="standerd" placeholder="standerd" required/>
	<input type="text" name="stuname" placeholder="Enter Student Name" required/>
	<input type="submit" name="submit" value="search">
</form>
</div>
</table>
<table >
		<caption>Student Info</caption>

	<tr >
		<th>No</th>
		<th>Image</th>
		<th>Name</th>
		<th>Roll No.</th>
		<th>Delete</th>

	</tr>
	<?php
if (isset($_POST['submit'])) {
	include('../dbcon.php');
	$standerd =$_POST['standerd'];
	$name =$_POST['stuname'];
	$sql="SELECT * FROM `student` WHERE `standerd`='$standerd' AND `namee` LIKE '%$name%'";
	$run = mysqli_query($con,$sql);
	   
	if (mysqli_num_rows($run)<1) {
		echo "<tr><td colspan='5'>No Record Found</td></tr>";
	}
	else{
		$count=0;
		while ($data =mysqli_fetch_assoc($run)) {
			$count++;
			?>
			<tr align="center">
				<td><?php echo $count; ?></td>
				<td><img src="../dataimg/<?php echo $data['imag']; ?>" style="max-width: 100px;"></td>
				<td><?php echo $data['namee'];?></td>
				<td><?php echo $data['rollno'];?></td>
				<td><a href="deleteform.php?sid=<?php echo $data['id'];?>">Delete</a></td>
			</tr>

			<?php
		}
	}
}
?>

</table>
</div>
</body>
</html>
