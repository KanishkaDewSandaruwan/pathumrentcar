<?php 
require_once 'connection.php';
require_once 'admin.php';

$cdate = date("Y/m/d m:H:s");
$rent_id = $_REQUEST['rent_id'];

$query1="SELECT * FROM rent WHERE rent_id='$rent_id'";
$sql1=mysqli_query($con,$query1);
$row=mysqli_fetch_assoc($sql1);
$car_id = $row['car_id'];
$totle_fee = $row['totle_fee'];

$q7 = "SELECT * FROM extend_rent where rent_id ='$rent_id'";
$res7 = mysqli_query($con,$q7);
$row7=mysqli_fetch_assoc($res7);
$last_amount = $row7['last_amount'];

$q1="INSERT INTO return_car(rent_id,return_date,overlap_days,additional_amount,paid_totle_bill,finished,payment) values('$rent_id','$cdate','0','0','$last_amount','Yes','No')";
  $res1=mysqli_query($con,$q1);


if ( $res1) {

$query3="UPDATE rent SET returncar='Yes' WHERE rent_id='".$rent_id."'";
mysqli_query($con,$query3);

 echo '<script>alert("Car Return is Scussessfully."); window.location.href="rent.php"; </script>';

}else{
echo "<script>alert(\"Car Return is Not Scussess\");</script>";
} ?>