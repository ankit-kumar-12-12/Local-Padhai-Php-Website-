

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

td{
	font-weight:bold;
	font-size: 50px;
	
}


</style>

<title>
User
</title>
</head>
<body>
<ul>
  
  <li style="float:left; color: blue;"><a href="index.php">
  <img src="../css/logo.png" width="120" height="100"></a></li>
  
  <li><a href="../logout.php">Log Out</a></li>
  <li><a href="contactus.php">Contact Us</a></li>
  <li><a href="checkstatus.php">Check Status</a></li>
  <li><a href="submitrequest.php">Submit Request</a></li>
  <li><a href="studentprofile.php">Profile</a></li>
  <li><a href="../index.php">Home</a></li>
</ul>

<div>

<h1><center>Submit Successfully</center></h1>
	<?php
	include('../dbconnection.php');
	session_start();
	if($_SESSION['is_login'])
	{
		$rEmail = $_SESSION['email'];
	}
	else
	{
		echo "<script> location.href='requesterlogin.php'</script>";
	}
	
	$sql = "SELECT * FROM `request` WHERE srequestid = {$_SESSION['id']}";
	$result = $conn->query($sql);
	
	if($result->num_rows == 1)
	{
		$row = $result->fetch_assoc();
		?>
		<center>
		<h1>
		<table border='0'>
				<tr>
					<td>
					ID    
					</td>
					<td>
					-
					<?php
					echo $row['srequestid'];
					?>
					</td>
				</tr>
				<tr>
					<td>
					Name
					</td>
					<td>
					-
					<?php
					echo $row['sname'];
					?>
					</td>
				</tr>
					<tr>
					<td>
					Email
					</td>
					<td>
					-
					<?php
					echo $row['semail'];
					?>
					</td>
				</tr>
		</table>
		Keep the id for future reference
		</center>
		
		</h1>
		<?php
	}
?>
		
		


</div>
</body>
</html>