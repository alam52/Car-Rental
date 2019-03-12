<?php include("config.php");?>

<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="external.css">
</head>
<header><strong><h1 align="center">Admin Login Page</h1></strong></header>
<body>  <br><br><br><br><br><br>
<form method="post" style="margin-left:33%">
<table style="color:white;
       background-color:black; 
       opacity:.65; 
       filter:alpha(opacity:100);"
       width="500"  cellspacing="10" cellpadding="5" bordercolor="#333333">
       <tr>
       <td>Email</td>
       <td><input type="email" placeholder="Enter your email ID" name="email"></td>
       </tr>
       <tr>
       <td>Password</td>
       <td><input type="password" placeholder="Enter your password" name="pass"></td>
       </tr>
       <tr>
       <div><td></td><td>
       <button type="submit" class="btn btn-primary" name="login">Login</button>
    <button type="reset" class="btn btn-primary">Reset</button></td>
       </div>
       </tr>
</table>
</form>
<?php
     
	 if(isset($_POST['login']))
	{
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		if(empty($_POST))
		{
			die("All fields are required");
		}
		$sql ="SELECT * FROM admin WHERE Email='$email' and Password='$pass';";
		$exec =mysqli_query($con,$sql) or die(mysqli_error($con));
		if(mysqli_num_rows($exec) == 1)
	    {
			session_start();
			$_SESSION['user']= NULL;
		    $userData = mysqli_fetch_array($exec);
		    $_SESSION['user']= $userData;
			header('location:perks.php');
			exit();
		}
		else
		{
			echo"<br><div align='center' color='solid red'>ACCESS DENIED!!</div>";
		}
	}
	?>
</body>
</html>
	 