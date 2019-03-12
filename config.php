<?php
session_start();
	//connectio code
	$username = "root";
	$password ="";
	$host='localhost';
	$dbname='nsec';
	//create the linker
	$con = mysqli_connect($host,$username,$password,$dbname) or die(mysqli_error($con));
	
	if($con){
		echo "";
	}



?>