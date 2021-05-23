<?php 
require_once 'connection.php';
session_start();
require_once 'user.php'; //Check login 

if(isset($_REQUEST['rent_id']))
{
	$id = $_REQUEST['rent_id'];

		$query3="UPDATE rent SET status='Cancel' WHERE rent_id='".$id."'";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"my_booking.php\";</script>";
} ?>