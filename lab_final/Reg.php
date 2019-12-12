<?php
	require_once('db.php');
	if(isset($_POST['get']))
	{
		echo "Error";
	}
	else
	{
		$id = $_POST['getid'];
		$name = $_POST['getname'];
		$email = $_POST['getemail'];
		$pass = $_POST['getPassWORD'];
		
		$con=getCon();
		$sql="insert into test values('{$name}','{$email}','{$password}','{$type}');";
		if(mysqli_query($con, $sql))
		{
			echo "Successful";
		}
		else
			echo "Error";
	}
?>