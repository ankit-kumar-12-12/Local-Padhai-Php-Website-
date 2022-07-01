<?php
	include('../dbconnection.php');
	session_start();
	if($_SESSION['is_login'])
	{
		$rEmail = $_SESSION['email'];
	}
	else
	{
		echo "<script> location.href='studentlogin.php'</script>";
	}
	
	if(isset($_POST['submit']))
	{
		$sname=$_POST['sname'];
		$spno=$_POST['spno'];
		$semail=$_POST['semail'];
		$sclass=$_POST['sclass'];
		$sstate=$_POST['sstate'];
		$scity=$_POST['scity'];
		$saddr=$_POST['saddr'];
		$sreq=$_POST['sreq'];
		$srequestdate=$_POST['srequestdate'];
		
		$sql = "INSERT INTO `request`(`sname`, `spno`, `semail`, `sclass`, `sstate`, `scity`, `saddr`, `sreq`, `srequestdate`) VALUES ('$sname','$spno','$semail','$sclass','$sstate','$scity','$saddr','$sreq','$srequestdate')";
		
		
		
		if($conn->query($sql) == true)
		{
			$msg="Request submit successfully";
			$getid = mysqli_insert_id($conn);
			$_SESSION['id'] = $getid;
			
			echo "<script> location.href='submitrequestsuccess.php'</script>";
		}
		else
		{
			$msg="No";
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
td{
	font-weight:bold;
	font-size: 20px;
	
}
input{
	width:580px; 
	height:50px; 
	font-size:15pt;
	
}
h1{
	font-size:30pt;
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

<h1>
<center>
Submit request
</center>

</h1>
<p style="text-align:center; font-size:15pt;">Please Fill these details and submit your requirements </p>		
		
		<center>
	
		<form action="" method="post">
				<table border='5' width='800px' cellpadding='20' cellspacing='10' align='center' style="background-color:#ffffff">
					<tr>
						<td>Name</td>
						<td><input 
						type="text" name="sname" required></td>
					</tr>
					<tr>
						<td>Phone Number</td>
						<td><input type="text" name="spno" required></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="semail" required></td>
					</tr>
					<tr>
						<td>Class</td>
						<td><input type="text" name="sclass" required></td>
					</tr>
					<tr>
						<td>State</td>
						<td><input type="text" name="sstate" required></td>
					</tr>
					<tr>
						<td>City</td>
						<td><input type="text" name="scity" required></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><input type="text" name="saddr" required></td>
					</tr>
					<tr>
						<td>Requirements</td>
						<td><input type="text" name="sreq" required></td>
					</tr>
					<tr>
						<td>Date</td>
						<td><input type="date" name="srequestdate"required></td>
					</tr>
				</table>
			<button 
			style="background-color: #4CAF50;" type="submit" name="submit">Submit</button>
			<button
			style="background-color: #66b3ff;" type="reset" name="reset">Reset
			</button>
			<?php 
			if(isset($msg))
			{
				echo $msg;
			}
				 
			?>
			</form>
	</center>


</div>
</body>
</html>