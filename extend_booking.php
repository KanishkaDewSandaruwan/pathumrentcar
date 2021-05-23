<?php require_once "head.php"; ?>
 
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
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">About Us</h1>
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
 <?php $viewquery = "SELECT * FROM about";
    $viewresult = mysqli_query($con,$viewquery);
    $row5 = mysqli_fetch_assoc($viewresult); 

    $about_image = $row5['image'];
    $image_src1 = "upload/home/".$about_image;
    ?>

<section class="ftco-section ftco-about ftco-no-pt img">
 <div class="container-fluid">
  <div class="row d-flex">
   <div class="col-md-12 about-intro">
    <div class="row">
     <div class="col-md-6 d-flex align-items-stretch">
      <div class="img d-flex align-items-center justify-content-center bg-light" >

        <form class="reg_form bg-light p-4 border rounded" action="" method="POST" enctype="multipart/form-data">
            <div class="modal-body">

              <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="name" class="a"><b>Extend Date</b></label>
                        <input type="date" class="form-control" id="extend" name="extend" placeholder="Extend Date">
                      </div>
                    </div>

              </div>

          <button type="button" class="btn btn-dark" onclick="window.location.href ='my_booking.php' " data-bs-dismiss="modal">Back</button>
          <button type="submit" name="submit" class="btn btn-primary">Confirm Extend</button>
      </form>
        <?php if(isset($_POST['submit'])){
              $extend = $_REQUEST['extend'];

              $rent_id = $_REQUEST['rent_id'];

              $query1="SELECT * FROM rent WHERE rent_id='$rent_id'";
              $sql1=mysqli_query($con,$query1);
              $row=mysqli_fetch_assoc($sql1);
              $car_id = $row['car_id'];
              $duedate = $row['due_date'];

              $q3 = "SELECT * FROM carreg where car_id = '$car_id' ";
              $res3 = mysqli_query($con,$q3);
              $row1=mysqli_fetch_assoc($res3);
              $fee = $row1['rent_fee'];

              if (!empty($extend)) {

                    if (new DateTime() <= new DateTime($extend)) {
                      if (new DateTime($duedate) < new DateTime($extend)) {

                          $query2="SELECT * FROM rent WHERE car_id = '$car_id' AND status != 'Canceled' AND returncar = 'No' AND NOT(due_date < '$extend' OR startdate > '$extend') ";
                           $sql2=mysqli_query($con,$query2);

                            if(mysqli_num_rows($sql2)>0)
                            {
                              echo "<script type=\"text/javascript\"> alert(\"Sorry! This Car Not Available this Day Now.\");</script>";
                            }
                            else
                            {

                              $diff = abs(strtotime($duedate) - strtotime($extend));
                              $years = floor($diff / (365*60*60*24));
                              $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                              $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

                              $total = $fee * $days;

                              echo '<script>alert("This Dates is Available. You can Extend Rent. Please Complete Extend"); window.location.href="extend_payment.php?rent_id='.$rent_id.'&extenddate='.$extend.'&total='.$total.'";</script>';


                            }

                      }else{echo "<script type=\"text/javascript\"> alert(\"Extend date need to be After Check Current Check Out Day\");</script>";}
                    }else{echo "<script type=\"text/javascript\"> alert(\"Check In date need to be After Current Day\");</script>";}

              }else{echo "<script type=\"text/javascript\"> alert(\"Please Select Check In Date\");</script>"; }
            } ?>
      </div>
    </div>
      <div class="col-md-5 pl-md-5 py-5">
      <div class="row justify-content-start pb-3">
        <div class="col-md-12 heading-section ftco-animate">
         <span class="subheading">Current Rent</span>
         <div class="col-md-12">
          <?php 
                $rent_id = $_REQUEST['rent_id'];
                  $viewquery = "SELECT * FROM rent where rent_id = ".$rent_id."";
                  $viewresult = mysqli_query($con,$viewquery); 
                  $row = mysqli_fetch_assoc($viewresult);?>
                  <h4>Check In Date : <?php echo $row['startdate']; ?></h4>
                  <h4>Check Out Date : <?php echo $row['due_date']; ?></h4>
                  <h4>Paid Payment : <?php echo $row['totle_fee']; ?></h4>
          </div>
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