<?php include('config.php');?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign Up</title>
<link rel="stylesheet" href="nav.php">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
.b{
	margin-left:50%;
}
form{
	float:right;
	margin-right:50px;
	margin-top:40px;
}
.hoa{
	float:left;
	width:700px;
	margin-top:50px;
	margin-left:25px;
	border-radius:10px;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image:url(img/pages/at1.jpg);
  background-size:100%;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 25px;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
input[type="text"],input[type="email"],input[type="password"]{
color:black;	
}
</style>
</head>

<body>
<div class="topnav">
   <a href="#register" >Drivers</a>
   <a href="#login">Cars</a><div></div>
    <a href="#contact">Contact</a><div></div>
      <a class="active" href="#home">Home</a><div></div>
   
</div>

<form method="post">
<table  width="350" height="200" style="color:white;
       background-color:black; 
       opacity:.55; 
       filter:alpha(opacity:50);" 
       align="center" class="a" cellspacing="10" cellpadding="5" bordercolor="#333333">
       <tr>
       <td>Name</td>
       <td><input type="text" name="name" placeholder="Enter your name"></td>
       </tr>
       <tr>
       <td>Email</td>
       <td><input type="email" name="email" placeholder="Enter your email"></td>
       </tr>
       <tr>
       <td>Phone</td>
       <td><input type="text" name="phno" placeholder="Enter your phone no."></td>
       </tr>
       <tr>
       <td>Password</td>
       <td><input type="password" name="pass" placeholder="Enter password"></td>
       </tr>
       <tr>
       <td>Confirm Password</td>
       <td><input type="password" name="pass2" placeholder="Re-Enter Password"></td>
      
       </tr>
       <tr>
       <td>
       <button type="submit" class="btn btn-primary" name="login">Sign Up</button>&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="reset" class="btn btn-primary">Reset</button></td></tr>
</table>
</form>
<?php
     
	 if(isset($_POST['login']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phno=$_POST['phno'];
		$pass=$_POST['pass'];
		$pass2=$_POST['pass2'];
		$pass=$_POST['pass'];
		if(empty($_POST))
		{
			die("All fields are required");
		}
		$sql ="SELECT * from admin where Email='$email' and Password='$pass';";
		$exec =mysqli_query($con,$sql) or die(mysqli_error($con));
		if(mysqli_num_rows($exec)>0)
	    {
			echo "<p>Email already exists</p>";
		}
		else 
		{
			if($pass!=$pass2){
				die("password mismatch");
			}
			
			
			
			$sql ="INSERT INTO user VALUES('0','$name','$email','$phno','$pass')";
		
			$exec =mysqli_query($con,$sql) or die(mysqli_error($con));
			
			if($exec ==1)
			{
				header('location:nav.php');
			}
			
		
			
		}
	}
	?> 
    <div class="hoa" align="left" style="color:black; 
       opacity:.5; 
       filter:alpha(opacity:50);">
<div class="jumbotron">
  <h1 color="black"><b>Vagabonds</b></h1>
  <p1><b> Transport company image result for vagabonds.com ANI Technology Pvt.Ltd.styled as vagabonds is an Indian origin online transportation network company. It was founded as an online cab in Mumbai, but is anow based in bangalore as of April 2018, vagabonds was valuated at 38 bilion. A wikipedi founded; 3 December 2015 Bangalore CEO Suraj Agarwal(3 December 2015).</b></p1>
  
</div>
</div>
</body>
</html>