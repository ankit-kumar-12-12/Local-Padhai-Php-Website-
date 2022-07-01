<?php
include('dbconnection.php');

if(isset($_POST['sSignup']))
{	$sName = $_POST['sName'];
	$sEmail = $_POST['sEmail'];
	$sPassword = $_POST['sPassword'];
	$sql = "INSERT INTO `student_login`(`sname`, `semail`, `spassword`) VALUES ('$sName','$sEmail','$sPassword')" ;
	if($conn->query($sql))
	{?><script>alert("Register Successfully Now you Can Login");
			window.open('student/studentlogin.php');
		</script>
	<?php
	}
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
ul 
{list-style-type: none;
  margin: 0; 
  padding: 0;
  overflow: hidden;
}
li 
{float: right;}
li a 
{display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size:30px;
}
body
{background:linear-gradient(to bottom, #33ccff 0%, #ccff66 100%);
	width:100%;
	height:100vh;
	margin:0;
	background-repeat:no-repeat;
	background-size:cover;
	background-attachment:fixed;
}
button 
{border: none;
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
  <li style="float:left; color: blue;"><a href="index.php">
  <img src="css/logo.png" width="120" height="100"></a></li>
  <li><a href="contactus.php">Contact Us</a></li>
  <li><a href="userregistration.php">Signup</a></li>
  <li><a href="student/studentlogin.php">Login</a></li>
  <li><a href="index.php">Home</a></li>
</ul>
<div>
	<center>
	<h1>Register With Local Padhai</h1>
	<form action="" method="post">
	<table border='5' width='500px' cellpadding='20' cellspacing='10' align='center' style="background-color:#ffffff">
	<tr>
	<td>
	<input style="width:450px; height:50px; font-size:18pt;"
	type="text" name="sName" placeholder="Enter your Name" required >
	</td>
	</tr>
	<tr>
	<td><input style="width:450px; height:50px; font-size:18pt;"
	type="email" name="sEmail" placeholder="Enter your Email"  required></td>
	</tr>
	<tr>
	<td><input style="width:450px; height:50px; font-size:18pt;"
	type="password" name="sPassword" placeholder="Enter a Password" required ></td>
	</tr>
	</table>
	<button style="background-color: #4CAF50;" type="submit" name="sSignup">Sign up</button>
	</form></center>
	</div>
</body>
</html>