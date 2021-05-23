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
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact us <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">Contact us</h1>
     </div>
   </div>
 </div>
</section>

<?php $viewquery = "SELECT * FROM about";
    $viewresult = mysqli_query($con,$viewquery);
    $row5 = mysqli_fetch_assoc($viewresult); 

    $about_image = $row5['image'];
    $image_src1 = "upload/home/".$about_image;
    ?>

<section class="ftco-section ftco-no-pb contact-section mb-4">
  <div class="container-fluid">
    <div class="row d-flex contact-info">
      <div class="col-md-3 d-flex">
       <div class="align-self-stretch box p-4 text-center">
        <div class="icon d-flex align-items-center justify-content-center">
         <span class="fa fa-map-marker"></span>
       </div>
       <h3 class="mb-2">Address</h3>
       <p><?php echo $row5['address']; ?></p>
     </div>
   </div>
   <div class="col-md-3 d-flex">
     <div class="align-self-stretch box p-4 text-center">
      <div class="icon d-flex align-items-center justify-content-center">
       <span class="fa fa-phone"></span>
     </div>
     <h3 class="mb-2">Contact Number</h3>
     <p><a href="tel://1234567920">+94 <?php echo $row5['phone']; ?></a></p>
   </div>
 </div>
 <div class="col-md-3 d-flex">
   <div class="align-self-stretch box p-4 text-center">
    <div class="icon d-flex align-items-center justify-content-center">
     <span class="fa fa-paper-plane"></span>
   </div>
   <h3 class="mb-2">Email Address</h3>
   <p><a href="mailto:info@yoursite.com"><?php echo $row5['email']; ?></a></p>
 </div>
</div>
<div class="col-md-3 d-flex">
 <div class="align-self-stretch box p-4 text-center">
  <div class="icon d-flex align-items-center justify-content-center">
   <span class="fa fa-globe"></span>
 </div>
 <h3 class="mb-2">Facebook</h3>
 <p><a href="<?php echo $row5['facebook']; ?>">Pathu Car Rent Fb Page</a></p>
</div>
</div>
</div>
</div>
</section>

<section class="ftco-section contact-section ftco-no-pt">
  <div class="container-fluid">
    <div class="row block-9">
      <div class="col-md-10 ml-5 order-md-last d-flex">
        <form action="" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="">Your name</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" class="">Your email</label>
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                    </div>
                <!--Grid column-->
                <br><br><br><br>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message">Your message</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

                <br><br>
                <div class="col-md-12 text-center text-md-left">
                <input type="submit" name="submit" class="btn btn-info" style="width: 100%;" value="Send" >
            </div>
            </form>
            <?php 

              if(isset($_POST['submit'])){

                    $name = $_REQUEST['name'];
                    $email = $_REQUEST['email'];
                    $subject = $_REQUEST['subject'];
                    $message = $_REQUEST['message'];
                    $cdate = date("Y/m/d m:H:s");


                    if(!empty($name)){
                      if(!empty($email)){
                        if(!empty($subject)){
                          if(!empty($message)){

                                        

                                $q1="INSERT INTO message(name,email,subject,message,trn_date,msg_read) values('$name','$email','$subject','$message','$cdate','No')";
                                      $res1=mysqli_query($con,$q1);
                                      if ( $res1) {

                                           echo '<script>alert("Massage Save Success.");
                                           window.location.href="index.php";</script>';
                                          
                                      }else{
                                        echo "<script>alert(\"Massege Sent not Success\");</script>";
                                      }
                                          
                                              
                                            

                            }else {echo "<script>alert(\"Enter Message\");</script>";}
                          }else {echo "<script>alert(\"Enter Subject\");</script>";}
                      }else{ echo "<script>alert(\"Enter Email\");</script>";}
                    }else{ echo "<script>alert(\"Enter Your Name\");</script>";} 
                }echo '</form></div>'; //Register Form Validation


             ?>
         
        
      </div>
   </div>
 </div>
</section>


<footer class="ftco-footer bg-bottom ftco-no-pt mt-5" style="background-image: url(images/bg_3.jpg);">
      <div class="container-fluid">
        <div class="row pt-5">
          <div class="col-md-12 text-left">

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