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
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Car <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">Find Car</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section">
      <div class="container-fluid">
        <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">Car Rent</span>
            <h2 class="mb-4">Available Cars</h2>
          </div>
        </div>
        <div class="row">
          <?php 
          $count = 0;

              $checkin = $_REQUEST['checkin'];
              $checkout = $_REQUEST['checkout'];
              $checktime = $_REQUEST['checktime'];

              $query2="SELECT * FROM carreg ";
              $sql2=mysqli_query($con,$query2);

              while ($row = mysqli_fetch_assoc($sql2)) { 
                $car_id = $row['car_id'];


                $query3="SELECT * FROM rent WHERE car_id = '$car_id' AND NOT(due_date < '$checkin' OR startdate > '$checkout') ";
                $sql3=mysqli_query($con,$query3);

                if(mysqli_num_rows($sql3)>0)
                {   

                }else{ 
                  if ($row['available'] == "Yes") {
                    $count++;
                    $image = $row['image'];
                    $image_src = "upload/car/".$image; ?>

                    <div class="col-md-4 ftco-animate">
                      <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url('<?php echo $image_src; ?>');">
                          <span class="price">Rs. <?php echo $row['rent_fee']; ?>/Per Day</span>
                        </a>
                        <div class="text p-4">
                          <span class="days"><?php echo $row['manufacture']; ?></span>
                          <h3><a href="#"><?php echo $row['title']; ?></a></h3>
                          <ul>
                            <li><span class="flaticon-shower"></span><?php echo $row['color']; ?></li>
                          </ul>
                          <button class="btn btn-primary mt-3 text-uppercase" onclick="window.location.href = 'car_book.php?car_id=<?php echo $car_id; ?>&checkin=<?php echo $checkin; ?>&checkout=<?php echo $checkout; ?>&checktime=<?php echo $checktime; ?>' " type="submit">Rent This Car</button>
                        </div>
                      </div>
                    </div>

        <?php } } }

          if ($count ==0) {
           echo "<p class='ml-5'>No Any Car Available in this Day</p>";
          }
         ?>

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