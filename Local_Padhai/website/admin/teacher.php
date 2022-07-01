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
	$sql="SELECT * FROM `teacher`";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
		echo '
		<table border="1">
		<tr>
			<h2>List of Teachers</h2>
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
				<h2>About</h2>
			</th>
			<th>
				<h2>Action</h2>
			</th>
		</tr>';
		while($row = $result->fetch_assoc())
		{
			echo '<tr>';
				echo '<td><h3>'.$row["tid"].'</h3></td>';
				echo '<td><h3>'.$row["tname"].'</h3></td>';
				echo '<td><h3>'.$row["temail"].'</h3></td>';
				echo '<td><h3>'.$row["tabout"].'</h3></td>';
				echo '<td>
						<form action="" method="post">
						<input type="hidden" name="id" 
						value="'.$row["tid"].'">
						<button style="background-color: #ff4d4d; type="submit" name="done">Delete</button>
						</form>
						</td>';
			echo '</tr>';
			if(isset($_POST['done']))
				{
					$sql = "DELETE FROM teacher WHERE tid={$_POST['id']}";
					if($conn->query($sql))
					{
						?>
						<script>
						alert("Deleted");
						window.open('teacher.php','_self');
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
	<div class="column">
	
	<h1>Register Teachers</h1>
			<form action="" method="post">
				<table border="3" >
					<tr>
						<th>Name</th>
						<td><input type="text" name="tname" required ></td>
					</tr>
					<tr>
						<th>Email</th>
						<td><input type="email" name="temail" required ></td>
					</tr>
					<tr>
						<th>About</th>
						
						
						
						<td><textarea style="width:580px; height:200px; font-size:18pt;" 
						name="tabout" required></textarea></td>
					</tr>
					
					
		
			</table>
			<center>
			<button style="background-color: #66b3ff;" type="submit" name="tadd">Register</button>
			</center>
			</form>
			</div>
			<?php
				if(isset($_POST['tadd']))
				{
						$tname = $_POST['tname'];
						$temail = $_POST['temail'];
						$tabout= $_POST['tabout'];
					
						

						$sql = "INSERT INTO `teacher`(`tname`, `temail`, `tabout`) VALUES ('$tname','$temail','$tabout')" ;
						
						if($conn->query($sql))
						{
							?>
						<script>
						alert("Registered");
						window.open('teacher.php','_self');
						</script>
						<?php
						}
				}
			?>
			
</div>
</body>
</html>