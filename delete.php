<?php 
  require_once 'connection.php'; //insert connection to page
  session_start();
  if(!isset($_SESSION['id'])){
    header('location:login.php');
  }

if(isset($_REQUEST['id']))
{
          $id = $_REQUEST['id'];

          $querygetcode="SELECT * FROM customer where id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['id'];
          $g=$result_row['email'];

          $cdate = date("Y/m/d m:H:s");

            $viewquery = " SELECT * FROM customer where email='".$g."'";
              $viewresult = mysqli_query($con,$viewquery);
              if ($row = mysqli_fetch_assoc($viewresult)) {

                $name = $row['name'];
                $cus_id = $row['id'];
                $phone = $row['phone'];
                $email = $row['email'];


              $q1="INSERT INTO customer_backup(id,name,phone,email,trn_date) values('$cus_id','$name','$phone','$email','$cdate')";
                $res1=mysqli_query($con,$q1);

                if ($res1) {


              $query1="DELETE FROM customer WHERE email='$g '";
                      mysqli_query($con,$query1);

                      header('location:logout.php');
                }
              }
}
else{
  header('location:myaccount.php'); 
} ?>