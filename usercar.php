<?php include('config.php');#if session is running
if(!isset($_SESSION['user'])){
	#if not redirect to login page
	header('location:login.php?loginagain');
} 
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>
			Cars
		</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="nav.css">
</head>
<body>

<div class="topnav">
<a href="admin_logout.php">Logout</a>
<a href="message.php">Messages</a>
   
   <a href="car_view.php" class="active">Cars</a>
   
   <a href="route_view.php">Routes</a>
   <a href="perks.php" >Home</a>
     </div><br><BR><BR><br>
		
		<?php 
			#prepare Sql
			$sql="SELECT * FROM car_details";
			
			#execute query
			$execute= mysqli_query($con,$sql) or die(mysqli_error($con));
			
			#check if rows found
			if(mysqli_num_rows($execute)>0){
			}
			else
			{
				echo "no car data found";
			}
			?>
			<table border="1" style="color:white;
       background-color:black; 
       opacity:.55; 
       filter:alpha(opacity:100);" 
       align="center" class="a" cellspacing="10" cellpadding="5" bordercolor="#333333">
				<thead>
					<tr>
						
						<th>Name</th>
						<th>Capacity</th>
						<th>Registration No.</th>
						<th>Fare/km</th>
                        <th>Driver</th>
                        <th>Mobile No.</th>
                        <th>Email</th>
                        <th>Licence</th>
						
					</tr>
				</thead>
				<tbody>
					<?php
							while($row=mysqli_fetch_array($execute))
							{?>
								<tr>
									<td><?php echo $row['Name']?></td>
								

								
									<td><?php echo $row['Capacity']?></td>
								
								
								
									<td><?php echo $row['Regd']?></td>
									
								
								
									<td><?php echo $row['Fare']?></td>
                                    <td><?php echo $row['Driver']?></td>
                                    <td><?php echo $row['Mobile']?></td>
                                    <td><?php echo $row['Email']?></td>
                                    <td><?php echo $row['License']?></td>
									
									
									
				               </tr>
                            <?php } ?>
								
							
					
				</tbody>
				      
			</table>
	
	</body>
</html>