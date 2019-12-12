<?php
    session_start();
	if(isset($_SESSION['username'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title> Admin's Homepage</title>
</head>
<body>

	<h1>Welcome Home <?=$_SESSION['username']?></h1> <br>
	<a href="profile.php">profile</a><br>
	<a href="changepass.php">Change Password</a><br>
	<a href="View.html">View Users</a><br>
	<a href="logout.php">logout</a>
</body>	
</html>



<?php		
	}else{
		header('location: login.html');
	}

?>

