<?php
require_once 'connection.php';

if(isset($_REQUEST['dealer_id']))
{
          $id = $_REQUEST['dealer_id'];

          $querygetcode="SELECT  * FROM delar where dealer_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['dealer_id'];

          $querygetcode1="SELECT  * FROM carreg where delar_code='".$a."'";
          $catresult1=mysqli_query($con,$querygetcode1);
          $result_row1=mysqli_fetch_assoc($catresult1);
          $b=$result_row1['car_id'];

          $querygetcode1="SELECT  * FROM rent where car_id='".$b."'";
          $catresult1=mysqli_query($con,$querygetcode1);
          $result_row1=mysqli_fetch_assoc($catresult1);
          $c=$result_row1['rent_id'];

          $query3="DELETE FROM extend_rent WHERE rent_id='$c '";
          mysqli_query($con,$query3);

          $query4="DELETE FROM return_car WHERE rent_id='$c '";
          mysqli_query($con,$query4);

          $query5="DELETE FROM rent WHERE rent_id='$c '";
          mysqli_query($con,$query5);

          $query2="DELETE FROM delar_payment WHERE delar_id='$a '";
          mysqli_query($con,$query2);

          $query3="DELETE FROM carreg WHERE delar_code='$a '";
          mysqli_query($con,$query3);

          $query4="DELETE FROM repair WHERE car_id='$b '";
          mysqli_query($con,$query4);

          $query1="DELETE FROM delar WHERE dealer_id='$a '";
          mysqli_query($con,$query1);
          header('location:dealer.php');

}
else if(isset($_REQUEST['extend_id']))
{
          $id = $_REQUEST['extend_id'];

          $querygetcode="SELECT  * FROM extend_rent where extend_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['extend_id'];

          $query1="DELETE FROM extend_rent WHERE extend_id='$a '";
          mysqli_query($con,$query1);
          header('location:rent.php');

}else if(isset($_REQUEST['image_id']))
{
          $id = $_REQUEST['image_id'];

          $querygetcode="SELECT  * FROM galary where image_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['image_id'];

          $query1="DELETE FROM galary WHERE image_id='$a '";
          mysqli_query($con,$query1);
          header('location:albem.php');

}else if(isset($_REQUEST['m_id']))
{
          $id = $_REQUEST['m_id'];

          $querygetcode="SELECT  * FROM message where m_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['m_id'];

          $query1="DELETE FROM message WHERE m_id='$a '";
          mysqli_query($con,$query1);
          header('location:messege.php');

}else if(isset($_REQUEST['car_id']))
{
          $id = $_REQUEST['car_id'];

          $querygetcode="SELECT  * FROM carreg where car_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['car_id'];

          $querygetcode1="SELECT  * FROM rent where car_id='".$a."'";
          $catresult1=mysqli_query($con,$querygetcode1);
          $result_row1=mysqli_fetch_assoc($catresult1);
          $b=$result_row1['rent_id'];

          $query3="DELETE FROM extend_rent WHERE rent_id='$b '";
          mysqli_query($con,$query3);

          $query4="DELETE FROM return_car WHERE rent_id='$b '";
          mysqli_query($con,$query4);

          $query5="DELETE FROM rent WHERE rent_id='$b '";
          mysqli_query($con,$query5);

          $query2="DELETE FROM repair WHERE car_id='$a '";
          mysqli_query($con,$query2);

          $query1="DELETE FROM carreg WHERE car_id='$a '";
          mysqli_query($con,$query1);
          header('location:car.php');

}
else if(isset($_REQUEST['return_id']))
{
          $id = $_REQUEST['return_id'];

          $querygetcode="SELECT  * FROM return_car where return_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['rent_id'];

          $query2="DELETE FROM extend_rent WHERE rent_id='$a '";
          mysqli_query($con,$query2);

          $query3="DELETE FROM return_car WHERE rent_id='$a '";
          mysqli_query($con,$query3);

          $query1="DELETE FROM return_car WHERE return_id='$a '";
          mysqli_query($con,$query1);
          header('location:rent.php');

}
else if(isset($_REQUEST['rent_id']))
{
          $id = $_REQUEST['rent_id'];

          $querygetcode="SELECT  * FROM rent where rent_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['rent_id'];

          $query2="DELETE FROM extend_rent WHERE rent_id='$a '";
          mysqli_query($con,$query2);

          $query3="DELETE FROM return_car WHERE rent_id='$a '";
          mysqli_query($con,$query3);

          $query1="DELETE FROM rent WHERE rent_id='$a '";
          mysqli_query($con,$query1);
          header('location:rent.php');

}else if(isset($_REQUEST['repaire_id']))
{
          $id = $_REQUEST['repaire_id'];

          $querygetcode="SELECT  * FROM repair where repaire_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['repaire_id'];

          $query1="DELETE FROM repair WHERE repaire_id='$a '";
          mysqli_query($con,$query1);
          header('location:car.php');

} else if(isset($_REQUEST['emp_id'])){
          $id = $_REQUEST['emp_id'];

          $querygetcode="SELECT  * FROM employee where emp_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['emp_id'];

          $query1="DELETE FROM employee WHERE emp_id='$a '";
          mysqli_query($con,$query1);
          header('location:employee.php');

}
 else if(isset($_REQUEST['salary_payment_id'])){
          $id = $_REQUEST['salary_payment_id'];

          $querygetcode="SELECT  * FROM salary_pay where salary_payment_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['salary_payment_id'];

          $query1="DELETE FROM salary_pay WHERE salary_payment_id='$a '";
          mysqli_query($con,$query1);
          header('location:payment.php');

}
 else if(isset($_REQUEST['dp_id'])){
          $id = $_REQUEST['dp_id'];

          $querygetcode="SELECT  * FROM delar_payment where dp_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['dp_id'];

          $query1="DELETE FROM delar_payment WHERE dp_id='$a '";
          mysqli_query($con,$query1);
          header('location:payment.php');

}
 else if(isset($_REQUEST['payment_id'])){
          $id = $_REQUEST['payment_id'];

          $querygetcode="SELECT  * FROM other_payment where payment_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['payment_id'];

          $query1="DELETE FROM other_payment WHERE payment_id='$a '";
          mysqli_query($con,$query1);
          header('location:payment.php');

}
else if(isset($_REQUEST['id']))
{
          $id = $_REQUEST['id'];

          $querygetcode="SELECT  * FROM customer where id='".$id."'";
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
                $phone = $row['mobile'];
                $email = $row['email'];


              $q1="INSERT INTO customer_backup(id,name,phone,email,trn_date) values('$cus_id','$name','$phone','$email','$cdate')";
                $res1=mysqli_query($con,$q1);

                if ($res1) {


              $query1="DELETE FROM customer WHERE email='$g '";
                      mysqli_query($con,$query1);

                      header('location:customer.php');
                }
              }
}
else{
  header('location:dashboard.php'); 
}
?>