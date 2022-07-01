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

* {
  box-sizing: border-box;
}

.row {
  margin-left:-5px;
  margin-right:-5px;
}
  
.column {
  float: left;
  width: 50%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
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
	
	<div class="row">
	
		<div class="column">
				<?php
				$sql="SELECT * FROM `request`";
				$result=$conn->query($sql);
				if($result->num_rows > 0)
				{
					echo '
					<table border="1">
					<tr>
						<center><h1>List of Requesters</h1><center>
					</tr>
					<tr>
						<th>
							<h2>Id</h2>
						</th>
						
						<th>
							<h2>Name</h2>
						</th>
						
						<th>
							<h2>Requirement</h2>
						</th>
						
						<th>
							<h2>Date</h2>
						</th>
						<th>
							<h2>Action</h2>
						</th>
					</tr>';
					while($row = $result->fetch_assoc())
					{
						echo '<tr>';
							echo '<td><h3>'.$row["srequestid"].'</h3></td>';
							
							echo '<td><h3>'.$row["sname"].'</h3></td>';
							
							echo '<td><h3>'.$row["sreq"].'</h3></td>';
							
							echo '<td><h3>'.$row["srequestdate"].'</h3></td>';
							
							echo 
							'<form action="" method="post">
								<td>
								<h3>
								<input type="hidden" name="id" value='.$row["srequestid"].'>
								<button style="background-color: #66b3ff; type="submit" name="view">Assign</button>
								<button style="background-color: #ff4d4d;type="submit" name="delete">Delete</button>
								
								</h3>
								</td>
							</form>';
							
						echo '</tr>';
						
					}
				//yaha tha 
				echo '</table>';	
					
				}
				else
				{
					echo "<h1><center>No Records</center></h1>";
				}
				?>
				
		</div>		
	
	
				<div class="column">
						<center>	<h1>Assign work</h1> </center>
							<?php
								if(isset($_POST['view']))
								{
									$sql="SELECT * FROM `request` WHERE srequestid = {$_POST['id']}";
									$result=$conn->query($sql);
									$row = $result->fetch_assoc();
								}
								if(isset($_POST['delete']))
								{
									$sql ="DELETE FROM `request` WHERE srequestid = {$_POST['id']}";
									$result=$conn->query($sql);
									if($result == true)
									{
										?>
										<script>
											alert("Deleted");
											
											window.open('dashboard.php');
										</script>
										<?php
										
									}
									else
									{
										echo "Error";
									}
								}
							?>
								<form action="" method="post"> 
									<table border='5' width='600px' cellpadding='20' cellspacing='10' align='center' style="background-color:#ffffff">
										<tr>
											<td>Request Id
											
											<input type="text" name="rid" 
											value=<?php if(isset($_POST['id']))
														{
															echo $_POST['id'];
														}
														?> ></td>
										</tr>
										<tr>
											<td>Name<input type="text" name="sname" 
											value=<?php if(isset($_POST['id']))
														{
															echo $row['sname'];
														}
														?>></td>
										</tr>
										<tr>
											<td>Phone Number<input type="text" name="spno"
											value=<?php if(isset($_POST['id']))
														{
															echo $row['spno'];
														}
														?>></td>
										</tr>
										<tr>
											<td>Email<input type="email" name="semail"
											value=<?php if(isset($_POST['id']))
														{
															echo $row['semail'];
														}
														?>></td>
										</tr>
										<tr>
											<td>Class<input type="text" name="sclass" 
											value=<?php if(isset($_POST['id']))
														{
															echo $row['sclass'];
														}
														?>></td>
										</tr>
										<tr>
											<td>State<input type="text" name="sstate" 
											value=<?php if(isset($_POST['id']))
														{
															echo $row['sstate'];
														}
														?>></td>
										</tr>
										<tr>
											<td>City<input type="text" name="scity" 
											value=<?php if(isset($_POST['id']))
														{
															echo $row['scity'];
														}
														?>></td>
										</tr>
										<tr>
											<td>Address<input type="text" name="saddr" 
											value=<?php if(isset($_POST['id']))
														{
															echo $row['saddr'];
														}
														?>></td>
										</tr>
										<tr>
											<td>Requirement<input type="text" name="sreq"
											value=<?php if(isset($_POST['id']))
														{
															echo $row['sreq'];
														}
														?>></td>
										</tr>
										<tr>
											<td>Assign Teacher<input type="text" name="tname"></td>
										</tr>
										<tr>
											<td>Assign Date<input type="date" name="date"></td>
										</tr>
									</table>
									<center>
								<button style="background-color: #4CAF50;" type="submit" name="assign">Assign</button>
								<button style="background-color: #66b3ff;"type="reset" name="reset">Reset</button>
								</center>
								<?php
								if(isset($_POST['assign']))
								{
									$rid=$_POST['rid'];
									$sname=$_POST['sname'];
									$spno=$_POST['spno'];
									$semail=$_POST['semail'];
									$sclass=$_POST['sclass'];
									$sstate=$_POST['sstate'];
									$scity=$_POST['scity'];
									$saddr=$_POST['saddr'];
									$sreq=$_POST['sreq'];
									$tname=$_POST['tname'];
									$date=$_POST['date'];
									
									$sql = "INSERT INTO `allocation`(`srequestid`, `sname`, `spno`, `semail`, `sclass`, `sstate`, `scity`, `saddr`, `sreq`, `tname`, `date`) VALUES ('$rid','$sname','$spno','$semail','$sclass','$sstate','$scity','$saddr','$sreq','$tname','$date')";
									
									if($conn->query($sql) == true)
									{
										?>
											<script>
											alert("Teacher Assign!");
											
											</script>
										<?php
									}
									else
									{
										?>
											<script>
											alert("Error!");
											
											</script>
										<?php
									}
									
							
									
								
								}
								?>
								
								</form>
					
	
				</div>
	</div>
</body>
</html>