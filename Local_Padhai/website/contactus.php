<?php
include('dbconnection.php');
if(isset($_POST['submit']))
{
	$Name = $_POST['name'];
	//$Name = $_REQUEST['name'];
	$Email = $_POST['email'];
	$Sub = $_POST['sub'];
	$About = $_POST['about'];

	$sql = "INSERT INTO `contactus`(`name`, `sub`, `email`, `about`) VALUES ('$Name','$Sub','$Email','$About')" ;
	
	if($conn->query($sql))
	{
		?>
		<script>
			alert("Will Inform you soon please check your mail after some time");
								
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
Local Padhai
</title>
</head>

<body>
<ul>
  
  <li style="float:left; color: blue;"><a href="index.php">
  <img src="css/logo.png" width="120" height="100"></a></li>
  <li><a href="admin/adminlogin.php">Admin Login</a></li>
  <li><a href="contactus.php">Contact Us</a></li>
  <li><a href="studentregistration.php">Signup</a></li>
  <li><a href="student/studentlogin.php">Login</a></li>
  <li><a href="index.php">Home</a></li>
</ul>


<div>
		<center>
		<h1>Contact Us</h1>
		<p>
		If your are Teacher, Professor, PhD Student, 
		<br>
		who are all passionate about their areas of expertise and eager to help students learn can give their details.
		</p>
			<form action="" method="post">
				<table border='5' width='500px' cellpadding='20' cellspacing='10' align='center' style="background-color:#ffffff">
					<tr>
						
						<td><input style="width:450px; height:50px; font-size:18pt;"
						type="text" name="name" placeholder="Name" required></td>
					</tr>
					<tr>
						
						<td><input style="width:450px; height:50px; font-size:18pt;"
						type="text" name="sub" placeholder="Subject" required></td>
					</tr>
					<tr>
						
						<td><input style="width:450px; height:50px; font-size:18pt;"
						type="email" name="email" placeholder="Email"required></td>
					</tr>
					<tr>
						
						<td><textarea style="width:450px; height:300px; font-size:18pt;" 
						name="about" placeholder="Address, Profession , Experience ........"required></textarea></td>
					</tr>
		
					</table>
				<button style="background-color: #4CAF50;" type="submit" name="submit">Send</button>
			</form>
		</center>
	</div>
</body>
</html>