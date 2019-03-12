<?php

include('config.php');


if($_SERVER['REQUEST_METHOD']=="POST")
{

$source=$_POST['source'];
$destination=$_POST['destination'];
$car=$_POST['car'];
$time=$_POST['time'];

$dist=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM srcdest where Source='$source' AND Destination = '$destination'"));
$row=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM car_driver where carName='$car'"));
/*$ddistance=(mysqli_query($con,"Select Km from srcdest where Place='Park Street'") or die(mysqli_error($con)));
$distance=$sdistance-$ddistance;*/



echo $time."<br>";
echo $dist['Km'];

}


?>