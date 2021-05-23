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
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Profile <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">Profile</h1>
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
     <div class="col-md-6 d-flex align-items-stretch">
      <div class="img d-flex w-100 align-items-center justify-content-center bg-info" style="height: 300px;">
          <?php 
            $viewquery = " SELECT * FROM customer where id = '".$_SESSION['id']."'";
            $viewresult = mysqli_query($con,$viewquery);
            $row = mysqli_fetch_assoc($viewresult); ?>


            <!-- <h1 class="text-danger text-uppercase">My Account Details</h1><br><br> -->
            <!-- <div class="dropdown-divider"></div> -->
            <div class="col-md-10 pt-5 pb-5 ">
                <div class="row ml-3">  
                   <h5 style="color: white;">Name : <?php echo $row['name']; ?></h5>
                </div>
                <div class="row ml-3">
                   <h5 style="color: white;">Address : <?php echo $row['address']; ?></h5>
                </div>
                <div class="row ml-3">
                   <h5 style="color: white;">Phone Number : <?php echo $row['mobile']; ?></h5>
                </div>
                <div class="row ml-3">
                   <h5 style="color: white;">Email Address : <?php echo $row['email']; ?></h5>
                </div>
                <div class="row ml-3">
                   <h5 style="color: white;">NIC Number : <?php echo $row['nic']; ?></h5>
                </div>
            </div>
      </div>
    </div>
      <div class="col-md-6 pl-md-5 py-5">
      <div class="row justify-content-start pb-3">
        <div class="col-md-12 heading-section ftco-animate">
         <span class="subheading">Profile</span>
         <div class="col-md-8">
                              <button type="button" name="submit" class="btn col-md-12 btn-lg p-4  btn-info" data-toggle="modal" data-target="#editprofile" style="border-radius:20px; margin-top: 5%;">Edit Profile</button>
                              <button type="button" name="submit" class="btn col-md-12 btn-lg p-4  btn-info" data-toggle="modal" data-target="#exampleModal" style="border-radius:20px; margin-top: 5%;">Change Password</button>
                              <button type="button" name="submit" class="btn col-md-12 btn-lg p-4  btn-info" data-toggle="modal" data-target="#exampleModalemail" style="border-radius:20px; margin-top: 5%;">Change Email</button>
                              <button type="button" name="submit" class="btn col-md-12 btn-lg p-4  btn-danger" onclick="window.location.href='delete.php?id=<?php echo $row['id']; ?>'" style="border-radius:20px; margin-top: 5%;">Delete Account</button>
                          </div>
       </div>
     </div>
   </div>
 </div>
</div>
</div>
</div>
</section>


  <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Change Password</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                            <form action="" method="POST"> 
                          <div class="modal-body">

                              <div class="form-row">
                                  <div class="form-group col-md-12">
                                    <input type="password" name="cpass" id="userPassword" class="form-control input-sm chat-input" placeholder="Current Password"/>
                                  </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <input type="password" name="npass" id="userPassword" class="form-control input-sm chat-input" placeholder="New Password"/>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <input type="password" name="conpass" id="userPassword" class="form-control input-sm chat-input" placeholder="Confirm Password"/>
                                </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="pass_change"  class="btn btn-primary">Save changes</button>
                          </div>
                           <?php
                            if(isset($_POST['pass_change']))
                            {


                            $currentpass=stripslashes($_REQUEST['cpass']);
                            $newpass=stripslashes($_REQUEST['npass']);
                            $confpass=stripslashes($_REQUEST['conpass']);
                            $g = $_SESSION['id'];

                            if(!empty($currentpass)){
                              if(!empty($newpass)){
                                if(!empty($confpass)){

                                  $loginsql="SELECT * FROM customer WHERE password='".md5($currentpass)."'";
                                  $result=mysqli_query($con,$loginsql) or mysqli_errno();
                                  $rows=mysqli_fetch_assoc($result);

                                  $query5="SELECT password FROM customer WHERE id='".$g."'";
                                  $sql5=mysqli_query($con,$query5);
                                  $row=mysqli_fetch_assoc($sql5);

                                  if(isset($rows['password'])==isset($row['password']))
                                  {
                                    if($newpass==$confpass){
                                      $query3="SELECT * FROM customer WHERE password='$newpass'";
                                      $sql3=mysqli_query($con,$query3);

                                      if(mysqli_num_rows($sql3)>0)
                                      {
                                        echo "password already Exsisted";
                                      }
                                      else
                                      {
                                          $query2="UPDATE customer SET password='".md5($newpass)."' WHERE id='".$g."'";
                                          $sql2=mysqli_query($con,$query2);
                                          echo "<script type=\"text/javascript\"> alert(\"Password Update Successfull\"); window.location.href='logout.php'; </script>"; 
                                      }

                                    }else{ echo "<script>alert(\"Password is Not Match\");</script>";} 
                                  }else{ echo "<script>alert(\"Current Password is Wrong\");</script>";} 
                                }else{ echo "<script>alert(\"Enter Confirm Password\");</script>";} 
                              }else{ echo "<script>alert(\"Enter New Password\");</script>";} 
                            }else{ echo "<script>alert(\"Enter Current Password\");</script>";} 

                            }
                        ?>
                        </form>
                        </div>
                      </div>
                    </div>

                    <!-- Modal Edit Profile-->
                    <div class="modal fade" id="editprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Change Profile Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                            <form action="" method="POST"> 
                          <div class="modal-body">

                              <div class="form-row">
                                  <div class="form-group col-md-12">
                                    <input type="text" name="name" id="name" class="form-control input-sm chat-input" placeholder="Your Name"/>
                                  </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <input type="text" name="phone" id="phone" class="form-control input-sm chat-input" placeholder="Phone Number"/>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <input type="text" name="address" id="address" class="form-control input-sm chat-input" placeholder="Your Address"/>
                                </div>
                              </div>


                            <div class="form-row">
                                <div class="form-group col-md-12">
                                  <input type="text" name="nic" id="address" class="form-control input-sm chat-input" placeholder="Your NIC Number"/>
                                </div>
                              </div>
                            </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="pass_detail"  class="btn btn-primary">Save changes</button>
                          </div>
                            <?php
                                if(isset($_POST['pass_detail']))
                                {


                                    $name = $_REQUEST['name'];
                                    $phone = $_REQUEST['phone'];
                                    $address = $_REQUEST['address'];
                                    $nic = $_REQUEST['nic'];
                                    $geID = $_SESSION['id'];
                                    $cdate = date("Y/m/d m:H:s");


                                      
                                                if(!empty($name))
                                                  {
                                                    $query3="UPDATE customer SET name='$name' WHERE id='".$geID."'";
                                                    $sql3=mysqli_query($con,$query3);
                                                    echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"profile.php\";</script>";
                                                  }

                                                  if(!empty($address))
                                                  {
                                                    $query3="UPDATE customer SET address='$address' WHERE id='".$geID."'";
                                                    $sql3=mysqli_query($con,$query3);
                                                    echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"profile.php\";</script>";
                                                  }

                                                  if(!empty($nic))
                                                  {
                                                    $query3="UPDATE customer SET nic='$nic' WHERE id='".$geID."'";
                                                    $sql3=mysqli_query($con,$query3);
                                                    echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"profile.php\";</script>";
                                                  }

                                                  if(!empty($phone))
                                                  {
                                                    if(preg_match("/^([0]([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
                                                        $query3="UPDATE customer SET mobil='$phone' WHERE id='".$geID."'";
                                                        $sql3=mysqli_query($con,$query3);
                                                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"profile.php\";</script>";

                                                      }else{echo "Enter Valid Phone Number";}
                                                  }


                                }
                            ?>
                        </form>
                        </div>
                      </div>
                    </div>
                         <!-- Modal -->
                    <div class="modal fade" id="exampleModalemail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Change Email</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                            <form action="" method="POST"> 
                          <div class="modal-body">

                              <div class="form-row">
                                  <div class="form-group col-md-12">
                                    <input type="email" name="cemail" id="userPassword" class="form-control input-sm chat-input" placeholder="Current Email"/>
                                  </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <input type="email" name="nemail" id="userPassword" class="form-control input-sm chat-input" placeholder="New Email"/>
                                </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit"  class="btn btn-primary">Save changes</button>
                          </div>
                          <?php
                  if(isset($_POST['submit']))
                  {

                  $currentemail=stripslashes($_REQUEST['cemail']);
                  $newemail=stripslashes($_REQUEST['nemail']);
                  $g = $_SESSION['id'];

                  if(!empty($currentemail)){
                    if(!empty($newemail)){
                      if(filter_var($newemail, FILTER_VALIDATE_EMAIL)){

                        $loginsql="SELECT * FROM customer WHERE email='".$currentemail."'";
                        $result=mysqli_query($con,$loginsql) or mysqli_errno();
                        $rows=mysqli_fetch_assoc($result);

                        $query5="SELECT email FROM customer WHERE id='".$g."'";
                        $sql5=mysqli_query($con,$query5);
                        $row=mysqli_fetch_assoc($sql5);

                        if(isset($rows['email'])==isset($row['email']))
                        {
                            $query3="SELECT * FROM customer WHERE email='$newemail'";
                            $sql3=mysqli_query($con,$query3);

                            if(mysqli_num_rows($sql3)>0)
                            {
                              echo "<script>alert(\"Email already Exsisted\");</script>";
                            }
                            else
                            {
                                $query2="UPDATE customer SET email='".$newemail."' WHERE email='".$currentemail."'";
                                $sql2=mysqli_query($con,$query2);
                                echo "<script type=\"text/javascript\"> alert(\"Email Update Successfull\"); window.location.href='logout.php'; </script>"; 
                            }
                        }else{ echo "<script>alert(\"Current Email is Wrong\");</script>";} 
                    
                      }else{ echo "<script>alert(\"Enter Valid Email\");</script>";} 
                    }else{ echo "<script>alert(\"Enter New Email\");</script>";} 
                  }else{ echo "<script>alert(\"Enter Current Email\");</script>";} 

                  }
              ?>
                        </form>
                        </div>
                      </div>
                    </div>



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