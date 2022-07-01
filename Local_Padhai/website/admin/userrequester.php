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
	
	<div align="center">
	<?php
	$sql="SELECT * FROM `student_login`";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
		echo '
		<table border="1">
		<tr>
			<h2>List of Users</h2>
		</tr>
		<tr>
			<th>
				<h2>Id</h2>
			</th>
			<th>
				<h2>Name</h2>
			</th>
			<th>
				<h2>Email</h2>
			</th>
			<th>
				<h2>Action</h2>
			</th>
		</tr>';
		while($row = $result->fetch_assoc())
		{
			echo '<tr>';
				echo '<td><h3>'.$row["sid"].'</h3></td>';
				echo '<td><h3>'.$row["sname"].'</h3></td>';
				echo '<td><h3>'.$row["semail"].'</h3></td>';
				echo '<td>
						<form action="" method="post">
						<input type="hidden" name="id" 
						value="'.$row["sid"].'">
						<button style="background-color: #ff4d4d; type="submit" name="done">Delete</button>
						</form>
						</td>';
			echo '</tr>';
			if(isset($_POST['done']))
				{
					$sql = "DELETE FROM student_login WHERE sid={$_POST['id']}";
					if($conn->query($sql))
					{
						?>
						<script>
						alert("Deleted");
						window.open('userrequester.php','_self');
						</script>
						<?php
					}
					else
					{
						echo "Error";
					}
				}
			
		}
		
	echo '</table>';
		
	}
	else
	{
		echo "<h1><center>No Records</center></h1>";
	}
	?>
	</div>
</body>
</html>