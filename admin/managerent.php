<?php 
require_once 'connection.php';
  require_once 'admin.php';

if(isset($_REQUEST['accept']))
{
		$id = $_REQUEST['accept'];

			$query3="UPDATE rent SET status='Accepted' WHERE rent_id='".$id."'";
			$sql3=mysqli_query($con,$query3);
		  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"rent.php\";</script>";

} else if (isset($_REQUEST['cancel'])) {

	$id = $_REQUEST['cancel'];

			$query3="UPDATE rent SET status='Canceled' WHERE rent_id='".$id."'";
			$sql3=mysqli_query($con,$query3);
		  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"rent.php\";</script>";

}else if (isset($_REQUEST['pick'])) {

	$id = $_REQUEST['pick'];
	$viewquery1 = "SELECT * FROM rent where rent_id = ".$id."";
	$viewresult1 = mysqli_query($con,$viewquery1);
	$row1 = mysqli_fetch_assoc($viewresult1);
	  if ($row1['status'] == 'Accepted' ) {

			$query3="UPDATE rent SET car_pick='Yes' WHERE rent_id='".$id."'";
			$sql3=mysqli_query($con,$query3);
		  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"rent.php\";</script>";
	  }else{ echo "<script type=\"text/javascript\"> alert(\"Please Accept This Book First\"); window.location= \"rent.php\";</script>";}

}
?>