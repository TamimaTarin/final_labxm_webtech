<?php
	if(isset($_COOKIE['username'])){
?>
<html>
<head>
	<title> user's Homepage</title>
</head>
<body>

	<h1>Welcome Home! <?=$_COOKIE['username']?></h1> 
	<a href="profile.html">profile</a><br>
	<a href="changepass.php">Change Password</a><br>
	<a href="logout.php">logout</a>
	
	
	
	
</body>	
</html>



<?php		
	}else{
		header('location: login.html');
	}

?>

