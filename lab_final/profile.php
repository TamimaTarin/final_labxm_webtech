 <?php
    session_start();
	if(isset($_SESSION['username'])){
?> 
<html>
  <head>
   <title>Login</title>
  </head>
  <body>
    
       <form >
         <fieldset>
		 <table border="1">
		 <tr>
                <td colspan="2">
                    <center> Profile</center>
                   </td>
          </tr>
		  <tr>
		   <td>ID</td>
		   <td>16-10101-2</td>
		  </tr>
		  <tr>
		   <td>NAME</td>
		   <td><?=$_SESSION['username']?></td>
		  </tr>
		  <tr>
		   <td>USER TYPE</td>
		   <td>Admin</td>
		  </tr>
		  <tr>
                <td colspan="2">
                      <a href>Go Home</a>
                   </td>
          </tr>
		  </table>
		  </fieldset>
		  </body>
		  </html>
		  <?php		
	}else{
		header('location: login.html');
	}

?>
