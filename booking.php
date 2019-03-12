<?php include('config.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Booking</title>
<link rel="stylesheet" href="nav.css">
<style>
table{
	margin-left:33%;
	margin-top:100px;
}
input[type="text"],input[type="email"],input[type="password"]{
color:black;}
</style>
</head>

<body>
<div class="topnav">
   <a href="usercar.php" >Drivers</a>
    <a href="contact.php">Contact</a>
      <a class="active" href="booking.php">Home</a>
   
</div>
<form method="post" action="invoice.php">
<table width="350" height="200" style="color:white;
       background-color:black; 
       opacity:.55; 
       filter:alpha(opacity:100);" 
       align="center" class="a" cellspacing="10" cellpadding="5" bordercolor="#333333">
<tr>
     <td>Car</td>
     <td><select name='car'>
         <option value=' '>Select Car</option>
         <?php 
		 $exec = mysqli_query($con,"SELECT Name FROM car_details");
		 if(mysqli_num_rows($exec) == 0)
		 {
			 die("Something went wrong");
		 }
		 while($row=mysqli_fetch_array($exec))
		 {
			 ?><option><?php echo $row['Name']?></option>
             <?php } ?>
         </select></td> 
</tr>
<tr>
     <td>Source</td>
     <td><select name='source'>
         <option value=' '>Select Source</option>
         <?php 
		 $exec = mysqli_query($con,"SELECT DISTINCT Source FROM routes");
		 if(mysqli_num_rows($exec) == 0)
		 {
			 die("Something went wrong");
		 }
		 while($row=mysqli_fetch_array($exec))
		 {
			 ?><option><?php echo $row['Source']?></option>
             <?php } ?> 
         </select></td>
</tr>
<tr>
     <td>Destination</td>
     <td><select name='destination'>
         <option value=' '>Select Destination</option>
         <?php 
		 $exec = mysqli_query($con,"SELECT DISTINCT Destination FROM routes");
		 if(mysqli_num_rows($exec) == 0)
		 {
			 die("Something went wrong");
		 }
		 while($row=mysqli_fetch_array($exec))
		 {
			 ?><option><?php echo $row['Destination']?></option>
             <?php } ?> 
         </select></td>
</tr>
<tr>
     <td>Pick Up Date</td>
     <td><input type="text" name="pickupdate" placeholder="Enter pickupdate"></td>
</tr>
<tr>
     <td>Drop Off Date</td>
     <td><input type="text" name="dropoffdate" placeholder="Enter dropdate"></td>
</tr>
<tr>
<td><input type="submit" name="btn" value="Proceed"></td>
</tr>
</table>
</form>
</body>
</html>