<?php
session_start();
if(isset($_SESSION['uid']))
        {
            header('location:admin/admindash.php');
           
        }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" href="css/login001.css">
</head>
<body>
	<div class="page_container">
	<div class="login">
<h1>Admin Login</h1>
<form action="login.php" method="post">
        <input type="text" name="username" placeholder="Enter UserName" autocomplete="off" required/>
		<input type="password" name="pass" placeholder="Enter Password" required/>
        <input type="submit" name="login" value="submit"/>
</form>
 <a href="index.php">Go To HomePage</a>
</div>
</div>
</body>
</html>

<?php
include ('dbcon.php');

if (isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $query = "SELECT * FROM `admin` WHERE `username` = '$username' AND `pass` = '$password'";

    $run = mysqli_query($con, $query);
    $row = mysqli_num_rows($run);
    if ($row < 1)

    {

?>
  	
      <script>
       alert('Username or Password do not match !!');
       window.open('login.php','_self'); 
    </script>
    <h1>Error</h1>
    </script>
<?php
    }

    else
    {
        $data = mysqli_fetch_assoc($run);
        $id = $data['id'];
        
        $_SESSION['uid'] =$id;
        header('location:admin/admindash.php');

        //echo "id = ". $id;
    }
}    

?>
