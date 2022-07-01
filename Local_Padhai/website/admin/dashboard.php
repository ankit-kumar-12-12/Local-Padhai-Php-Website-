<?php 
include('../dbconnection.php'); 
session_start();
if(isset($_SESSION['is_adminlogin']))
{
	$aEmail = $_SESSION['email'];
	
	
}
else
{
	header('location:adminlogin.php');
	
}

$sql = "SELECT * FROM request";
$result = $conn->query($sql);
$rows = mysqli_num_rows($result);


$sql2 = "SELECT * FROM allocation";
$result2 = $conn->query($sql2);
$rows2 = mysqli_num_rows($result2);


$sql3 = "SELECT * FROM teacher";
$result3 = $conn->query($sql3);
$rows3 = mysqli_num_rows($result3);

$sql4 = "SELECT * FROM student_login";
$result4 = $conn->query($sql4);
$rows4 = mysqli_num_rows($result4);

$sql5 = "SELECT * FROM contactus";
$result5 = $conn->query($sql5);
$rows5 = mysqli_num_rows($result5);


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
  
    <li><a href="../logout.php">Logout</a></li>
	<li><a href="message.php">Message</a></li>
	<li><a href="userrequester.php">Users</a></li>
	<li><a href="teacher.php">Teachers</a></li>
	<li><a href="request.php">Requests</a></li>
	<li><a href="work.php">Assigne Work</a></li>
	<li><a href="dashboard.php">Dashboard</a></li>
</ul>
	
	
	
	<center>
	<table border='5' width='1000px' cellpadding='20' cellspacing='10' align='center' style="background-color:#ffffff">
		
		<tr>
			<td>
				<h1>Requests</h1>
					<br>
			
				<h2><?php echo $rows;?></h2>
					<br>
				<a href="request.php">View</a>
			</td>
			<td>
				<h1>Assigned work</h1>
					<br>
				<h2><?php echo $rows2;?></h2>
					<br>
				<a href="work.php">View</a>
			</td>
			<td>
				<h1>No. of Teachers</h1>
					<br>
				<h2><?php echo $rows3;?></h2>
					<br>
				<a href="teacher.php">View</a>
			</td>
			<td>
				<h1>No. of Users</h1>
					<br>
				<h2><?php echo $rows4;?></h2>
					<br>
				<a href="userrequester.php">View</a>
			</td>
			<td>
				<h1>No. of Message</h1>
					<br>
				<h2><?php echo $rows5;?></h2>
					<br>
				<a href="message.php">View</a>
			</td>
		</tr>
	</table>
	
	
	
	
	</center>
</body>
</html>