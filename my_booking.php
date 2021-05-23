<?php 
require_once "head.php";
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
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>My Bookings <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">My Bookings</h1>
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
  <div class="row d-flex">
   <div class="col-md-12 about-intro">
    <div class="row">
     <div class="col-md-12 d-flex align-items-stretch">
      <div class="img d-flex w-100 align-items-center justify-content-center bg-primary">
          <div class="col-lg-12 mb-5 mb-lg-0">
                      <table class="table v-middle" style="text-align: center;">
                                    <thead>
                                        <tr class="bg-dark">
                                            <th class="border-top-0 text-white">Check In Date</th>
                                            <th class="border-top-0 text-white">Check Out Date </th>
                                            <th class="border-top-0 text-white">Total Fee</th>
                                            <th class="border-top-0 text-white">Car Number</th>
                                            <th class="border-top-0 text-white">Car Pick</th>
                                            <th class="border-top-0 text-white">Payment</th>
                                            <th class="border-top-0 text-white">Return Car</th>

                                            <th class="border-top-0 text-white">Extend</th>
                                            <th class="border-top-0 text-white">Progress</th>
                                            <th class="border-top-0 text-white">Action</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                      $count=1;
                                      $id = $_SESSION['id'];
                                        $viewquery = "SELECT * FROM rent where customer_id = ".$id." order by trn_date desc";
                                        $viewresult = mysqli_query($con,$viewquery);
                                    
                                         ?>
                                        <tbody>
                                          <?php while($row = mysqli_fetch_assoc($viewresult)) { 
                                              $rent_id = $row['rent_id'];

                                              $viewquery1 = "SELECT * FROM extend_rent where rent_id = ".$rent_id."";
                                              $viewresult1 = mysqli_query($con,$viewquery1);
                                              $row1 = mysqli_fetch_assoc($viewresult1);
                                            ?>
                                                <tr>
                                                    <td class="text-white"><?php echo $row['startdate']; ?></td>
                                                    <?php if ($row['extend'] == 'Yes') {?>
                                                    <td class="text-white">Recent : <?php echo $row['due_date']; ?><br> New :  <?php echo $row1['extend_date']; ?></td>
                                                  <?php }else{ ?>
                                                    <td class="text-white"><?php echo $row['due_date']; ?></td>
                                                  <?php } ?>
                                                    <?php if ($row['extend'] == 'Yes') {?>
                                                    <td class="text-white">Recent Total : LKR <?php echo $row['totle_fee']; ?><br>Extend Amount :  LKR <?php echo $row1['aditional_amount']; ?><br> Last Total : LKR <?php echo $row1['last_amount']; ?></td>
                                                  <?php }else{ ?>
                                                    <td class="text-white"> LKR <?php echo $row['totle_fee']; ?></td>
                                                  <?php } ?>
                                                    <td class="text-white"><?php echo $row['car_number']; ?></td>
                                                    <td class="text-white"><?php echo $row['car_pick']; ?></td>
                                                    <?php if ($row['extend'] == 'Yes') {?>
                                                    <td class="text-white">Booking :<?php echo $row['payment']; ?> <br> Extended : <?php echo $row1['payment']; ?></td>
                                                  <?php }else{ ?>
                                                    <td class="text-white"><?php echo $row['payment']; ?></td>
                                                  <?php } ?>
                                                    <td class="text-white"><?php echo $row['returncar']; ?></td>
                                                    <td class="text-white"><?php echo $row['extend']; ?></td>
                                                    <td class="text-white"><?php echo $row['status']; ?></td>

                                                    <?php if ($row['status'] != 'Cancel') {?>
                                                    <td class="text-white"><div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                          Action
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <?php if ($row['extend'] != 'Yes') {?>
                                                          <a class="dropdown-item" href="extend_booking.php?rent_id=<?php echo $row['rent_id']; ?>"><i class="fas fa-calendar-day"> Extend Booking</i></a>
                                                        <?php } ?>
                                                          <a class="dropdown-item" href="cancel_booking.php?rent_id=<?php echo $row['rent_id']; ?>"><i class="fas fa-ban"> Cancel Booking</i></a>

                                                          <?php if ($row['payment'] == 'Pay Later') {?>
                                                          <a class="dropdown-item" href="card.php?rent_id=<?php echo $row['rent_id']; ?>&total=<?php echo $row['totle_fee']; ?>"><i class="fas fa-credit-card"> Pay</i></a>
                                                        <?php } ?>
                                                          <?php if ($row['extend'] == 'Yes' && $row1['payment'] == 'Pay Later') {?>
                                                          <div class="dropdown-divider"></div>
                                                          <a class="dropdown-item" href="card_extend.php?rent_id=<?php echo $row['rent_id']; ?>&total=<?php echo $row1['aditional_amount']; ?>"><i class="fas fa-credit-card"> Extend Pay</i></a>
                                                        <?php } ?>
                                                        </div>
                                                      </div>
                                                    </td>
                                                  <?php } ?>
                                                </tr>
                                            <?php   $count++;   }?>
                                    </tbody>
                                </table>
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