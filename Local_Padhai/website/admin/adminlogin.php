<?php
include('../dbconnection.php');

session_start();
if(!isset($_SESSION['is_adminlogin']))
{


		if(isset($_POST['submit']))
		{
			
			$aEmail = $_POST['email'];
			$aPassword = $_POST['password'];

			//$sql = "SELECT `r_email`,`r_password` FROM 'requesterlogin_tb' WHERE `r_email` = '$rEmail ' AND `r_password` = '$rPassword'" ;
			$sql = "SELECT `aemail`,`apassword` FROM `admin_login` WHERE `aemail` = '".$aEmail."' AND `apassword` = '".$aPassword."'";
			
			
			$result = $conn->query($sql);
			
			if($result->num_rows == 1)
			{
				//echo "login hogaya";
				$_SESSION['is_adminlogin'] = true;
				$_SESSION['email'] = $aEmail;
				
				
				header('location:dashboard.php');
				
			}
			else
			{
				?>
				<script>
				alert("Please Enter valid Email or Password");
				
				</script>
				<?php
			}
		}
}
else
{
	header('location:dashboard.php');
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
	background: linear-gradient(to top, #ff0000 0%, #66ffff 100%);
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

<title>
Local Padhai
</title>

</head>
<body>
<ul>
  
  <li style="float:left; color: blue;"><a href="../index.php">
  <img src="../css/logo.png" width="120" height="100"></a></li>
  
</ul>
<div>
	<center>
	<h1>Admin login</h1>
		<form action="" method="post">
				<table border='5' width='500px' cellpadding='20' cellspacing='10' align='center' style="background-color:#ffffff">
					<tr>
						<td><input style="width:450px; height:50px; font-size:18pt;" 
						type="email" name="email" placeholder="Email"required></td>
					</tr>
					<tr>
						<td><input style="width:450px; height:50px; font-size:18pt;"
						type="password" name="password" placeholder="Password" required></td>
					</tr>
					
		
			</table>
			<button style="background-color:   #4cb2ff;" type="submit" name="submit">Login</button>
			</form>
	</center>
	
</div>

</body>
</html>  