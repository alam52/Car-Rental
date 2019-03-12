<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
#okay{
	margin-left:15%;

}
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
input[type="text"],input[type="email"],input[type="password"]{
color:black;	
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
<table width="350" height="200" style="color:white;
       background-color:black; 
       opacity:.55; 
       filter:alpha(opacity:100);" 
       align="center" class="a" cellspacing="10" cellpadding="5" bordercolor="#333333">
<tr>
<tr>
<td>Email</td>
<td><input type="email" name="email" placeholder="Enter your email"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass" placeholder="Enter password"></td>
</tr>
<?php
     
	if(isset($_POST['not_done']))
	{
		echo "<div class='alert alert-warning'><b>Email or Password Incorrect</b></div>";
	}
	?>
<div><td>
       <button type="submit" class="btn btn-link" name="login">Login</button>
    <button type="reset" class="btn btn-link"><a href="signup.php">Not a member?Sign Up</a></button>
    <button type="submit" class="btn btn-link"><a href="login.php">Login as Admin</a></button>
    </td>
       </div>
       </table>
       </form>
       <?php
     
	 if(isset($_POST['login']))
	{
		include('config.php');
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		if(empty($_POST))
		{
			die("All fields are required");
		}
		$sql ="SELECT * from user where Email='$email' and Password='$pass';";
		$exec =mysqli_query($con,$sql) or die(mysqli_error($con));
		if(mysqli_num_rows($exec) == 1)
	    {
			session_start();
			$_SESSION['user']= NULL;
		    $userData = mysqli_fetch_array($exec);
		    $_SESSION['user']= $userData;
			header('location:booking.php');
			exit();
		}
		else
		{
			header('location:nav.php?not_done=true');
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