<?php 
include('dbconnection.php');
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
	background:linear-gradient(to bottom, #cc99ff 0%, #ffffff 100%);
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
th ,td{
	text-align:center;
}


</style>
<title>
LOCAL PADHAI
</title>
</head>
<body>

<ul>
  
  <li style="float:left; color: blue;"><a href="index.php">
  <img src="css/logo.png" width="120" height="100"></a></li>
  
  <li><a href="contactus.php">Contact Us</a></li>
  <li><a href="studentregistration.php">Signup</a></li>
  <li><a href="student/studentlogin.php">Login</a></li>
  <li><a href="index.php">Home</a></li>
</ul>

<center>
<b><p style="font-size:70px;">WELCOME TO LOCAL PADHAI</p></b>
</center>

<p style="font-size:30px; font-family:verdana; margin-left:60px;">
<img src="css/t.png" width="300" height="300" style="border:15px solid white; float:right; margin-right:20px;">
Our tutors are teachers, professors, PhD students, <br>
and industry professionals, who are all passionate about their areas of expertise and eager to help students learn.
</p>


<p style="font-size:30px; font-family:verdana; margin-left:20px; margin-top:250px; ">
<img src="css/t1.jpg" width="300" height="300" style="border:15px solid white; float:left; margin-left:50px;">
Our students range from kindergarten through <br>
college to adult learners. 
They share positive feedback <br> about their online tutoring experience every day.
</p>



<p style="font-size:30px; font-family:verdana; margin-left:40px;  margin-top:250px; ">
Our platform makes connecting with students simple, convenient, and flexible in your own locality.
</p>




<?php
	$sql="SELECT * FROM `teacher`";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
		echo '
		<table border="0" align="center" width="1000px" cellpadding="10" cellspacing="5">
		<tr>
			<h1><center>List of Our Esteemed Teachers</center></h1>
		</tr>
		<tr>
			
			<th>
				<h2>Name</h2>
			</th>
			<th>
				<h2>Email</h2>
			</th>
			<th>
				<h2>About</h2>
			</th>
			
		</tr>';
		while($row = $result->fetch_assoc())
		{
			echo '<tr>';
				
				echo '<td><h3>'.$row["tname"].'</h3></td>';
				echo '<td><h3>'.$row["temail"].'</h3></td>';
				echo '<td><h3>'.$row["tabout"].'</h3></td>';
				
			echo '</tr>';
			
			
		}
		
	echo '</table>';
		
	}
	
	?>


<center>

<p style="font-size:30px; font-family:verdana; margin-left:40px;  margin-top:250px; ">
Want to be our part and excel in our field?
</p>

<a href="studentregistration.php">
<button style="background-color: #008CBA;">Signup</button>
</a>
<center>

</body>
</html>
