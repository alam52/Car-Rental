<?php include('config.php'); #if session is running
if(!isset($_SESSION['user'])){
	#if not redirect to login page
	header('location:nav.php?loginagain');
} 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Routes</title>
<link rel="stylesheet" href="nav.css">
<style>
header{
	margin-left:37%;
}
table{
	margin-left:33%;
	margin-top:100px;
}
</style>
</head>
<header><h1><u> Routes Data Entry </u></h1></header>
<body>
<form method="post">
<table  border="1" style="color:white;
       background-color:black; 
       opacity:.55; 
       filter:alpha(opacity:100);" 
       align="center" class="a" cellspacing="10" cellpadding="5" bordercolor="#333333">
<tr>   
        <td>Source</td>
        <td><input type="text" name="source" placeholder="Enter source"></td>
</tr>
<tr>
        <td>Destination</td>
        <td><input type="text" name="destination" placeholder="Enter destination"></td>
</tr>
<tr>
        <td>Distance</td>
        <td><input type="text" name="distance" placeholder="Enter distance"></td>
</tr>
<tr>
        <td><input type="submit" name="btn" value="Submit"></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['btn']))
{
	$source = $_POST['source'];
	$destination = $_POST['destination'];
	$distance = $_POST['distance'];
	if(empty($_POST))
	{
		die("ALL Fields are required");
	}
	
	$exec =mysqli_query($con, "INSERT INTO routes VALUES('0','$source','$destination','$distance')");
	if($exec==1)
	{
		header('location:route_view.php');
		exit("Route Added");
	}
}
	
?> 
</body>
</html>