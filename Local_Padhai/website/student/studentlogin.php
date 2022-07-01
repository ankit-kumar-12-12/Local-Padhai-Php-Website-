<?php
include('../dbconnection.php');

session_start();
if(!isset($_SESSION['is_login']))
{


		if(isset($_POST['submit']))
		{
			
			$sEmail = $_POST['email'];
			$sPassword = $_POST['password'];

			//$sql = "SELECT `r_email`,`r_password` FROM 'requesterlogin_tb' WHERE `r_email` = '$rEmail ' AND `r_password` = '$rPassword'" ;
			
			$sql = "SELECT semail, spassword FROM student_login WHERE semail = '".$sEmail."' AND spassword = '".$sPassword."' ";
			
			$result = $conn->query($sql);
			
			if($result->num_rows == 1)
			{
				//echo "login hogaya";
				$_SESSION['is_login'] = true;
				$_SESSION['email'] = $sEmail;
				
				
				header('location:studentprofile.php');
				
			}
			else
			{
				?>
				<script>
				alert("Please Register/ Email or Password missmatched");
				
				</script>
			<?php
			}
		}
}
else
{
	header('location:studentprofile.php');
}



?>


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
ul 
{
	
  list-style-type: none;
  margin: 0; 
  padding: 0;
  overflow: hidden;
  
}

li 
{
  float: right;
}

li a 
{
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size:30px;
}
body
{
	background:linear-gradient(to bottom, #33ccff 0%, #ccff66 100%);
	width:100%;
	height:100vh;
	margin:0;
	background-repeat:no-repeat;
	background-size:cover;
	background-attachment:fixed;
}

button 
{
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}




</style>
<title>LOCAL PADHAI</title>
</head>
<body>

<ul>
  <!--<b><p style="font-size:50px">LOCAL PADHAI</p></b>-->
  
  <!--<b><li style="float:left; color: blue;"><a href="#home">LOCAL PADHAI</a></li></b>-->
  <li style="float:left; color: blue;"><a href="../index.php">
  <img src="../css/logo.png" width="120" height="100"></a></li>
  
  
</ul>

<div>
	<center>
	<h1>Student Login</h1>
		<form action="" method="post">
				<table border='5' width='500px' cellpadding='20' cellspacing='10' align='center' style="background-color:#ffffff">
					
					
					<tr>
						
						<td>
						<input style="width:450px; height:50px; font-size:18pt;"
						type="email" name="email" placeholder="Enter Email"required>
						</td>
					</tr>
					<tr>
						
						<td>
						<input style="width:450px; height:50px; font-size:18pt;" 
						type="password" name="password" placeholder="Enter Password" required></td>
					</tr>
					
		
			</table>
			<button 
			style="background-color: #4CAF50;" type="submit" name="submit">Login</button>
			</form>
	</center>
	
</div>

</body>
</html>