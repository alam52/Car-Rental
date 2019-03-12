<?php<?php include('config.php'); #if session is running
if(!isset($_SESSION['user'])){
	#if not redirect to login page
	header('location:nav.php?loginagain');
} 
?>
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Privilage</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="nav.css">
</head>
<body>

<div class="topnav">
<a href="admin_logout.php">Logout</a><div></div>
<a href="message.php">Messages</a>
   <a href="places.php" >Places</a>
   <a href="route_view.php">Routes</a><div></div>
    <a href="car_view.php">Cars</a><div></div>
     </div>
     <div class="hoa" align="left" style="color:black; 
       opacity:.5; 
       filter:alpha(opacity:50);">
<div class="jumbotron">
  <h1 color="black"><b>Welcome Admin</b></h1>
  <p1><b> Major Part of your job is to <br> 1.Add or Delete or View Routes <br> 2.Add or Delete or View Car and Driver Details <br> 3.Manage User Database <br> 4. MAnage Complaint Messages from Users</b></p1>
  </div></div>
</body>
</html>