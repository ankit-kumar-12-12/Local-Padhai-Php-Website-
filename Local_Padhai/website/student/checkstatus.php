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
	font-size: 25px;
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

<h1><center>Check Status</center></h1>
		
		<div align="center">
			<form action="" method="post">
				<table border='5' width='500px' cellpadding='20' cellspacing='10' align='center' style="background-color:#ffffff">
				
					<tr>
						
						<td>
						Enter id
						<input style="width:450px; height:50px; font-size:18pt;"
						type="text" name="checkid" required>
						</td>
					</tr>
					
					<tr>
						
						<td>
						Enter Email id
						<input style="width:450px; height:50px; font-size:18pt;"
						type="text" name="checkemail" required>	
						</td>
					</tr>
				
				</table>
			
			
			
			<br>
			<button style="background-color: #4CAF50;" type="submit" name="submit">Search</button>
			</form>
			<?php
				if(isset($_POST['submit']))
				{
					$sql = "SELECT * FROM `allocation` WHERE `srequestid` = {$_POST['checkid']}";
					
					$result = $conn->query($sql);
					
					$row = $result->fetch_assoc();
					
			?>
					<?php
					
					if(($row['srequestid'] == $_POST['checkid']) && $row['semail'] == $_POST['checkemail'] )
					{
						?>
						<table border='5' width='500px' cellpadding='20' cellspacing='10' align='center' style="background-color:#ffffff">
						
						<h1><strong>Assigned Teacher-<?php echo $row['tname']?></strong></h1>
						<tr>
							<td>Request Id</td>
							<td><?php echo $row['srequestid']?></td>
						</tr>
						<tr>
							<td>Name</td>
							<td><?php echo $row['sname']?></td>
						</tr>
						<tr>
							<td>Phone Number</td>
							<td><?php echo $row['spno']?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><?php echo $row['semail']?></td>
						</tr>
						<tr>
							<td>Class</td>
							<td><?php echo $row['sclass']?></td>
						</tr>
						<tr>
							<td>City</td>
							<td><?php echo $row['scity']?></td>
						</tr>
						<tr>
							<td>State</td>
							<td><?php echo $row['sstate']?></td>
						</tr>
						<tr>
							<td>City</td>
							<td><?php echo $row['scity']?></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><?php echo $row['saddr']?></td>
						</tr>
						<tr>
							<td>Requirements</td>
							<td><?php echo $row['sreq']?></td>
						</tr>
						<tr>
							<td>Assigned Teacher</td>
							<td><?php echo $row['tname']?></td>
						</tr>
						<tr>
							<td>Assigned Date</td>
							<td><?php echo $row['date']?></td>
						</tr>
					</table>
					<?php	
					}
					else
					{
						?>
							<script>
								alert("Pending");
								window.open('checkstatus.php',_self);
							</script>
							<?php
					}
					
				}?>
					
			
			
		</div>
		


</div>
</body>
</html>