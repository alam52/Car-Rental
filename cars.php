<?php include('config.php'); 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cars</title>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image:url(img/pages/at1.jpg);
  background-size:100%;
}
table{
	margin-left:33%;
	margin-top:100px;
}
header{
	margin-left:37%;
}
p{
	margin-left:37%;
}
</style>
</head>
<header><h1><u>Car Data Entry</u></h1></header>
<body>
<form method="post">
<table style="color:white;
       background-color:black; 
       opacity:.65; 
       filter:alpha(opacity:100);"
       width="500"  cellspacing="10" cellpadding="5" bordercolor="#333333">
<tr>
      <td>Car</td>
      <td><input type="text" name="name" placeholder="Enter car name"></td>
</tr>
<tr>
      <td>Registration No.</td>
      <td><input type="text" name="regd" placeholder="Enter registraion no."></td>
</tr>
<tr>
      <td>Seat Capacity</td>
      <td><input type="text" name="capacity" placeholder="Enter seat capacity"></td>
</tr>
<tr>
      <td>Fare</td>
      <td><input type="text" name="farepkm" placeholder="Enter fare/km"></td>
</tr>
<tr>
					<td>Driver</td><td><input name="driver" type="text" placeholder="Enter Name"></td>
				</tr>
                <tr>
                <td>Email</td>
                <td><input type="email" name="email" placeholder="Enter your email"></td>
                </tr>
				<tr>
					<td>Mobile Number</td><td><input name="mobile" type="text" placeholder="Enter mobile number"></td>
				</tr>
				<tr>
					<td>License</td><td><input name="license" type="license" placeholder="Enter License Number"></td>
				</tr>
<tr>
        <td><input type="submit" name="btn" value="submit"></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['btn']))
{
	$id=$_POST['id'];
	$name = $_POST['name'];
	$reg = $_POST['regd'];
	$s_cap =$_POST['capacity'];
	$fare =$_POST['farepkm'];
	$driver=$_POST['driver'];
	$phno=$_POST['mobile'];
	$email=$_POST['email'];
	$lic=$_POST['license'];
	    $exec = mysqli_query($con,"INSERT INTO car_details VALUES('0','$name','$s_cap','$reg','$fare','$driver','$phno','$email','$lic')");
		
		if($exec == 1){
			header('location:car_view.php');
	}
	else
	{
		?> <p  style="color:white;
       background-color:black; 
       opacity:.65; 
       filter:alpha(opacity:100);"><h1>Enter the Details Properly</h1></p><?php
	}	
}
?> 
</body>
</html>