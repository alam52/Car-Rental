<?php

	if($_SERVER['REQUEST_METHOD']==='POST')
	{
		
		#CONNECTION
		include('config.php');
		$id=$_POST['id'];
		
		#delete record by id
		
		$statement="DELETE FROM routes WHERE ID= '$id'";
		$execute_statement=mysqli_query($con,$statement) or die(mysqli_error($con));
		
		if($execute_statement == 1)
		{
			?>
			<script>
				alert('Route Deleted');
				window.location.href="route_view.php";
			</script>
			<?php
				
		}
	}?>