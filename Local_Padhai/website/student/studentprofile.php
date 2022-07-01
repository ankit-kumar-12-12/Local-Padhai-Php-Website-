<?php
	include('../dbconnection.php');
	session_start();
	if($_SESSION['is_login'])
	{
		$sEmail = $_SESSION['email'];
	}
	else
	{
		echo "<script> location.href='studentlogin.php'</script>";
	}
	$sql = "SELECT sname,semail FROM student_login WHERE semail='$sEmail'";
	$result=$conn->query($sql);
	if($result->num_rows == 1)
	{
		$row = $result->fetch_assoc();
		$sName = $row['sname'];
	}
	if(isset($_POST['update']))
	{
		if($_POST['name'] == "")
		{
				?>
				<script>
				alert("Please Fill Your Name");
				</script>
				<?php
		}
		else
		{
			$sName = $_POST['name'];
			$sql = "UPDATE student_login SET sname = '$sName' WHERE semail = '$sEmail'";
			$result=$conn->query($sql);
			
			if($result)
			{
				?>
				<script>
				alert("Your Name Update Successfully");
				</script>
				<?php
			}
			else
			{
				?>
				<script>
				alert("Try Again");
				</script>
				<?php
			}
		
		}
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

<h1><center>Welcom To Local Padhai<br>Your Profile</center></h1>
		
		
		<center>
	
		<form action="" method="post">
				<table border='0' width='500px' cellpadding='20' cellspacing='10' align='center' style="background: transparent">
					<tr>
						<td>
						Your Email
						<input style="width:450px; height:50px; font-size:18pt; background: transparent;"
						type="email" name="email" value="<?php echo $sEmail?>"readonly>
						</td>
					</tr>
					<tr>
						<td>
						Your Name
						<input style="width:450px; height:50px; font-size:18pt;
						background: transparent" 
						type="text" name="name" value="<?php echo $sName?>">
						</td>
					</tr>
				</table>
				Want to update your name?
			<button style="background-color: #4CAF50;" type="submit" name="update">Update</button>
			
			</form>
	</center>


</div>
</body>
</html>