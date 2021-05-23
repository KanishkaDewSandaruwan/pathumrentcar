<?php
	require_once 'connection.php'; //insert connection to page
	session_start();

	if(!isset($_SESSION['id'])){
		echo "<script type=\"text/javascript\">window.location= \"login.php\";</script>";
	}else{
		$id = $_SESSION['id'];
		$viewquery = " SELECT * FROM customer where id = '$id'";
        $viewresult = mysqli_query($con,$viewquery); 
        $row1 = mysqli_fetch_assoc($viewresult);

        if (!isset($row1['name'])) {
        	echo "<script type=\"text/javascript\"> window.location= \"login.php\";</script>";
        }
	}
?>