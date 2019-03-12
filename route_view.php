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
		<title>
			Routes
		</title>
		
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
   <a href="route_view.php" class="active">Routes</a><div></div>
    <a href="car_view.php">Cars</a><div></div>
    <a href="perks.php">Home</a>
     </div><br><br><br>
		
		<?php 
		
			
			#prepare Sql
			$sql="SELECT * FROM routes";
			
			#execute query
			$execute= mysqli_query($con,$sql) or die(mysqli_error($con));
			
			#check if rows found
			if(mysqli_num_rows($execute)>0){
			}
			else
			{
				echo "no routes found";
			}
			?>
			<table border="1" style="color:white;
       background-color:black; 
       opacity:.55; 
       filter:alpha(opacity:100);" 
       align="center" class="a" cellspacing="10" cellpadding="5" bordercolor="#333333">
				<thead>
					<tr>
                        <th>Source</th>
                        <th>Destination</th>
                        <th>Distance</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php
							while($row=mysqli_fetch_array($execute))
							{?>
								<tr>
									<td><?php echo $row['Source']?></td>
								

								
									<td><?php echo $row['Destination']?></td>
								
								
								
									<td><?php echo $row['Distance']?></td>
									
								
								
									
									
									<td><a href="routedel.php?id=<?php echo $row['ID']?>">DELETE </a></td>
				               </tr>
                            <?php } ?>
								
							
					
				</tbody>
				       <div><td>
       <button type="submit" class="btn btn-link"><a href="routes.php">Add</button></a></td></div>
			</table>
	
	</body>
</html>