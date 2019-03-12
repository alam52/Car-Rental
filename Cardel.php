<?php
	if($_SERVER['REQUEST_METHOD']==='POST')
	{
		#CONNECTION
		include('config.php');
		
		$id=$_POST['id'];
		
		#delete record by id
		
		$statement="DELETE FROM car_details WHERE ID='$id'";
		$execute_statement=mysqli_query($con,$statement) or die(mysqli_error($con));
		
		if($execute_statement == 1)
		{
			?>
			<script>
				alert('Car Data Deleted');
				window.location.href="route_view.php";
			</script>
			<?php
				
		}
	}?>