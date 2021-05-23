<?php require_once "head.php"; 
require_once "user.php";
?>
 
  <?php 
    $home_query = "SELECT * FROM details";
    $home_query_result = mysqli_query($con, $home_query);
    $row = mysqli_fetch_assoc($home_query_result);
    $bottom_banner_01 = $row['subpage_image'];
    $header_image = $row['header_image'];
    $image_src2 = "upload/home/".$bottom_banner_01; 
    $image_src3 = "upload/home/".$header_image; 
    ?>
 <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?php echo $image_src2; ?>');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Payment <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">Payment</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section ftco-about img mt-5"style="background-image: url('<?php echo $image_src3; ?>');">
 <div class="overlay"></div>
 <div class="container py-md-5">
  <div class="row py-md-5">
</div>
</div>
</section>

<section class="ftco-section ftco-about ftco-no-pt img">
 <div class="container-fluid">
  <?php 

    $rent_id = $_REQUEST['rent_id'];

    $query1="SELECT * FROM rent WHERE rent_id='$rent_id'";
    $sql1=mysqli_query($con,$query1);
    $row1=mysqli_fetch_assoc($sql1);
    $car_id = $row1['car_id'];
    $duedate = $row1['due_date'];

    $query2="SELECT * FROM carreg where car_id = '$car_id' ";
    $sql2=mysqli_query($con,$query2); 
    $row = mysqli_fetch_assoc($sql2);

    $fee = $row['rent_fee'];
    $extenddate = $_REQUEST['extenddate'];

    $diff = abs(strtotime($duedate) - strtotime($extenddate));
    $years = floor($diff / (365*60*60*24));
    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

    $total = $fee * $days;
    $subtotal = $row1["totle_fee"] + $total;

    $image = $row['image'];
    $image_src = "upload/car/".$image; ?>

  <div class="row d-flex">
   <div class="col-md-12 about-intro">
    <div class="row">
     <div class="col-md-6 d-flex align-items-stretch">
      <div class="img d-flex w-100 align-items-center justify-content-center" style="background-image:url('<?php echo $image_src; ?>'); height: 500px">
      </div>
    </div>
    <div class="col-md-6 pl-md-5 py-5">
      <div class="row justify-content-start pb-3">
        <div class="col-md-12 heading-section ftco-animate">
         <span class="subheading">Pay for Your Booking</span>
         <h2 class="mb-4"><?php echo $row['title']; ?></h2>
         <p><?php echo $row["manufacture"]; ?> | <?php echo $row["model"]; ?> | <?php echo $row["color"]; ?></p>

         <div style="font-family: 'Times New Roman', Times, serif;" class="col-md-8 p-3 border">
            <div class="row">
              <div class="col-md-7"><h6 style="color: maroon; font-weight: bold;">Chec In Date & Time  </h6></div>
              <div class="col-md-5"><h6 class="text-dark">: <?php echo $row1["startdate"]; ?> </h6></div>
            </div>
            <div class="row">
              <div class="col-md-7"><h6 style="color: maroon; font-weight: bold;">Check Out Date & Time </h6></div>
              <div class="col-md-5"><h6 class="text-dark">: <?php echo $row1["due_date"]; ?></h6></div>
            </div>
            <div class="row">
              <div class="col-md-7"><h6 style="color: maroon; font-weight: bold;">Number of Extend Day </h6></div>
              <div class="col-md-5"><h6 class="text-dark">: <?php echo $days; ?></h6></div>
            </div>
            <div class="row">
              <div class="col-md-7"><h6 style="color: maroon; font-weight: bold;">Extend Car Rent Fee </h6></div>
              <div class="col-md-5"><h6 class="text-dark">: <?php echo $fee; ?></h6></div>
            </div>
            <div class="row">
              <div class="col-md-7"><h6 style="color: maroon; font-weight: bold;">Recent Car Rent Fee </h6></div>
              <div class="col-md-5"><h6 class="text-dark">: <?php echo $row1["totle_fee"]; ?></h6></div>
            </div>
             <div class="row">
              <div class="col-md-7"><h6 style="color: maroon; font-weight: bold;">Full Subtotal </h6></div>
              <div class="col-md-5"><h6 class="text-dark">: <?php echo $subtotal; ?></h6></div>
            </div>
            
          </div>
          <div class="row mt-3">
            <div class="col-md-7"><h3 style="color: maroon; font-weight: bold;">Total Pending Payment </h3></div>
            <div class="col-md-4"><h3 class="text-danger">Rs.  <?php echo $total; ?></h3></div>
          </div>

         <form class="reg_form bg-light p-4 border rounded" action="" method="POST" enctype="multipart/form-data">
              <div class="modal-body">

                    <div class="form-row mt-5">
                      <div class="form-group col-md-12">
                        <label for="inputState"><b>Payment Method</b></label>
                        <select id="inputState" name="paymentoption" class="form-control">
                          <option selected></option>
                          <option>Pay Later</option>
                          <option>Credit Card</option>
                        </select>
                      </div>
                      </div>

                </div>

            <button type="button" class="btn btn-dark" onclick="window.location.href ='my_booking.php' " data-bs-dismiss="modal">Cancel</button>
            <button type="submit" name="submit" class="btn btn-primary">Confirm Booking</button>
        </form>
        <?php
                                    if(isset($_POST['submit'])){
                                      $paymentoption = $_REQUEST['paymentoption'];


                                      $cdate = date("Y/m/d m:H:s");
                                      $customer = $_SESSION['id'];
                                      $extenddate = $_REQUEST['extenddate'];
                                      $total = $_REQUEST['total'];

                                      $rent_id = $_REQUEST['rent_id'];


                                      $query1="SELECT * FROM rent WHERE rent_id='$rent_id'";
                                      $sql1=mysqli_query($con,$query1);
                                      $row=mysqli_fetch_assoc($sql1);
                                      $car_id = $row['car_id'];
                                      $duedate = $row['due_date'];
                                      $totle_fee = $row['totle_fee'];

                                      $q3 = "SELECT * FROM carreg where car_id = '$car_id' ";
                                      $res3 = mysqli_query($con,$q3);
                                      $row1=mysqli_fetch_assoc($res3);
                                      $fee = $row1['rent_fee'];
                                      $car_number = $row1['car_number'];

                                          if (!empty($paymentoption)) {
                                              if ($paymentoption == 'Pay Later') {


                                                if ($row1['available'] == 'Yes') {
                                                  if (new DateTime() <= new DateTime($extenddate)) {
                                                    if (new DateTime($duedate) <= new DateTime($extenddate)) {

                                                           $query2="SELECT * FROM rent WHERE car_id = '$car_id' AND status != 'Canceled' AND returncar = 'No' AND NOT(due_date < '$extenddate' OR startdate > '$extenddate') ";
                                                           $sql2=mysqli_query($con,$query2);

                                                            if(mysqli_num_rows($sql2)>0)
                                                            {
                                                              echo "<script type=\"text/javascript\"> alert(\"Sorry! This Car Not Available this Day Now.\"); window.location.href=\"rentcar.php\"</script>";
                                                            }
                                                            else
                                                            {

                                                              $diff = abs(strtotime($duedate) - strtotime($extenddate));
                                                              $years = floor($diff / (365*60*60*24));
                                                              $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                                                              $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

                                                              $total = $fee * $days;
                                                              $last_total = $total + $totle_fee;

                                                                 $q1="INSERT INTO extend_rent(rent_id,extend_date,aditional_amount,last_amount,trndate,payment) values('$rent_id','$extenddate','$total','$last_total','$cdate','$paymentoption')";
                                                                  $res1=mysqli_query($con,$q1);
                                                                  if ( $res1) {
                                                                      $query3="UPDATE rent SET extend='Yes' WHERE rent_id='".$rent_id."'";
                                                                      mysqli_query($con,$query3);


                                                                       echo '<script>alert("Car Rent Extend is Scussessfully."); window.location.href="my_booking.php"; </script>';
                                                                      
                                                                  }else{
                                                                    echo "<script>alert(\"Car Rent Extend is Not Scussess\");</script>";
                                                                  }
                    
                                                            }
                      
                                                        
                                                      }else{
                                                        echo "<script type=\"text/javascript\"> alert(\"Start date and Due Date need to future day\");</script>";
                                                      }
                                                  }else{
                                                    echo "<script type=\"text/javascript\"> alert(\"Start Date need to future day\");</script>";
                                                  }
                                                }else{
                                                  echo "<script type=\"text/javascript\"> alert(\"Sorry! This Car Not Available Now. Please Select Another Car\"); window.location.href=\"rentcar.php\";</script>";
                                                }
                                              }else if ($paymentoption == 'Credit Card') {

                                                 if ($row1['available'] == 'Yes') {
                                                  if (new DateTime() <= new DateTime($extenddate)) {
                                                    if (new DateTime($duedate) <= new DateTime($extenddate)) {

                                                           $query2="SELECT * FROM rent WHERE car_id = '$car_id' AND status != 'Canceled' AND returncar = 'No' AND NOT(due_date < '$extenddate' OR startdate > '$extenddate') ";
                                                           $sql2=mysqli_query($con,$query2);

                                                            if(mysqli_num_rows($sql2)>0)
                                                            {
                                                              echo "<script type=\"text/javascript\"> alert(\"Sorry! This Car Not Available this Day Now.\"); window.location.href=\"rentcar.php\"</script>";
                                                            }
                                                            else
                                                            {

                                                              $diff = abs(strtotime($duedate) - strtotime($extenddate));
                                                              $years = floor($diff / (365*60*60*24));
                                                              $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                                                              $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

                                                              $total = $fee * $days;
                                                              $last_total = $total + $totle_fee;

                                                                 $q1="INSERT INTO extend_rent(rent_id,extend_date,aditional_amount,last_amount,trndate,payment) values('$rent_id','$extenddate','$total','$last_total','$cdate','$paymentoption')";
                                                                  $res1=mysqli_query($con,$q1);
                                                                  if ( $res1) {
                                                                    $query3="UPDATE rent SET extend='Yes' WHERE rent_id='".$rent_id."'";
                                                                    mysqli_query($con,$query3);

                                                                    $rent_id = $_REQUEST['rent_id'];

                                                                    echo '<script>alert("Booking Saved is Scussessfully."); window.location.href="card.php?rent_id='.$rent_id.'&total='.$total.'"; </script>'; 
                                                                      
                                                                  }else{
                                                                    echo "<script>alert(\"Car Rent is Not Scussess\");</script>";
                                                                  }
                    
                                                            }
                      
                                                        
                                                      }else{
                                                        echo "<script type=\"text/javascript\"> alert(\"Start date and Due Date need to future day\");</script>";
                                                      }
                                                  }else{
                                                    echo "<script type=\"text/javascript\"> alert(\"Start Date need to future day\");</script>";
                                                  }
                                                }else{
                                                  echo "<script type=\"text/javascript\"> alert(\"Sorry! This Car Not Available Now. Please Select Another Car\"); window.location.href=\"rentcar.php\";</script>";
                                                }

                                                     
                                              }
                                        }else{echo "<script type=\"text/javascript\"> alert(\"Select payment Option\");</script>";}

                                  } ?>
       </div>
     </div>
   </div>
 </div>
</div>
</div>
</div>
</section>




<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(images/bg_3.jpg);">
  <div class="container-fluid">
 <div class="row mt-5">
  <div class="col-md-12 text-center">

    <p class="text-dark">© 2021, Copyright © 2021. All rights reserved. Pathum Car Rent | Created By : D.H.G.R.N. WICKRAMASINGHE | SEU/IS/16/MIT/052</p>
    </div>
  </div>
</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>