<?php include('config.php');?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="nav.css">
<style>
body{
	margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image:url(img/pages/at1.jpg);
  background-size:100%;
}
table{
	margin-left:33%;
	margin-top:100px;
}
</style>
</head>

<body>
<div class="topnav">
   <a href="usercar.php" >Drivers</a>
    <a href="contact.php" class="active">Contact</a><div></div>
      <a href="booking.php">Home</a><div></div>
   
</div><form method ="post" >
			
			<table style="color:white;
       background-color:black; 
       opacity:.65; 
       filter:alpha(opacity:100);"
       width="500"  cellspacing="10" cellpadding="5" bordercolor="#333333">
				<tr>
					<td>Name</td><td><input name="name" type="text" placeholder="Enter Name"></td>
				</tr>
				<tr>
					<td>Email</td><td><input name="email" type="text" placeholder="Enter Email Address"></td>
				</tr>
				<tr>
					<td>Message</td><td><textarea name="msg" placeholder="Enter your Query or Complaint"></textarea></td>
				</tr>
				<tr>
                <tr><td><input type="submit" name="Submit"></td></tr>
                </tr>
                </table>
                </form>


<?php 
       
	   if(isset($_POST['Submit']))
	{ 
	    $name= $_POST['name'];
		$email= $_POST['email'];
		$msg= $_POST['msg'];


	
	$sql ="INSERT INTO driver VALUES('0','$name','$email','$msg')";
	$exec = mysqli_query($con,$sql);
		if($exec ==1)
	{
		?>
        <script>
		alert('Message Sent');
		window.location.href="booking.php";
		</script>
        <?php
	}
	}
?>                
</body>
</html>