<?php #if session is running
if(!isset($_SESSION['user'])){
	#if not redirect to login page
	header('location:login.php?loginagain');
} include('config.php');
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>
			Cars
		</title>
		
        <style type="text/css">
		body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image:url(img/pages/at1.jpg);
  background-size:100%;
}
table{
	margin-top:25px;
}
header{
	margin-left:37%
}
		</style>
	</head>
    <header><h1><u>Car Details</u></h1></header>
	<body>
		
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
						<th>Delete</th>
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