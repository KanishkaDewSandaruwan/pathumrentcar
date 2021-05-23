<?php require_once "head.php"; ?>
	<link rel="icon" type="image/png" href="images/aa.jpg" sizes="300x300" />
	<?php 
    $home_query = "SELECT * FROM details";
    $home_query_result = mysqli_query($con, $home_query);
    $row = mysqli_fetch_assoc($home_query_result);
    $bottom_banner_01 = $row['subpage_image'];
    $header_image = $row['header_image'];
    $image_src2 = "upload/home/".$bottom_banner_01; 
    $image_src3 = "upload/home/".$header_image; 
    ?>

	<div class="hero-wrap js-fullheight" style="background-image: url('<?php echo $image_src3; ?>');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
				<div class="col-md-7 ftco-animate">
					<span class="subheading">Welcome to Pathu Car Rent</span>
					<h1 class="mb-4"><?php echo $row['header_title']; ?></h1>
					<p class="caps"><?php echo $row['header_desc']; ?></p>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section ftco-no-pb ftco-no-pt">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="ftco-search d-flex justify-content-center">
						<div class="row">
							<div class="col-md-12 nav-link-wrap">
								<div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
									<a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Search Car</a>
								</div>
							</div>
							<div class="col-md-12 tab-wrap">
								
								<div class="tab-content" id="v-pills-tabContent">

									<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
										<form action="" method="POST" class="search-property-1">
											<div class="row no-gutters">
												<div class="col-md d-flex">
													<div class="form-group p-4">
														<label for="#">Check-in date</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-calendar"></span></div>
															<input type="date" name="checkin" class="form-control" placeholder="Check In Date">
														</div>
													</div>
												</div>
												<div class="col-md d-flex">
													<div class="form-group p-4">
														<label for="#">Check-out date</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-calendar"></span></div>
															<input type="date" name="checkout" class="form-control " placeholder="Check Out Date">
														</div>
													</div>
												</div>
												<div class="col-md d-flex">
													<div class="form-group p-4">
														<label for="#">Check-In Time</label>
														<div class="form-field">
															<div class="icon"><span class="fas fa-clock"></span></div>
															<input type="time" name="checktime" class="form-control" placeholder="Check Out Date">
														</div>
													</div>
												</div>
												<div class="col-md d-flex">
													<div class="form-group d-flex w-100 border-0">
														<div class="form-field w-100 align-items-center d-flex">
															<input type="submit" name="submit" value="Search" class="align-self-stretch form-control btn btn-primary">
														</div>
													</div>
												</div>
											</div>
										</form>
										<?php if(isset($_POST['submit'])){
											$checkin = $_REQUEST['checkin'];
                                      		$checkout = $_REQUEST['checkout'];
                                      		$checktime = $_REQUEST['checktime'];

                                      		if (!empty($checkin)) {
                                      			if (!empty($checkout)) {
                                      				if (!empty($checktime)) {

                                      					if (new DateTime() <= new DateTime($checkin)) {
                                      						if (new DateTime($checkin) <= new DateTime($checkout)) {

                                      								echo '<script>window.location.href="car.php?checkin='.$checkin.'&checkout='.$checkout.'&checktime='.$checktime.'";</script>';

                                      						}else{echo "<script type=\"text/javascript\"> alert(\"Check Out date need to be After Check in Day\");</script>";}
                                      					}else{echo "<script type=\"text/javascript\"> alert(\"Check In date need to be After Current Day\");</script>";}

                                      				}else{echo "<script type=\"text/javascript\"> alert(\"Please Select Time\");</script>"; }
                                      			}else{echo "<script type=\"text/javascript\"> alert(\"Please Select Check Out Date\");</script>"; }
                                      		}else{echo "<script type=\"text/javascript\"> alert(\"Please Select Check In Date\");</script>"; }
										} ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section">
      <div class="container-fluid">
        <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">Gallery</span>
            <h2 class="mb-4">Our Gallery</h2>
          </div>
        </div>
        <div class="row">
          <?php 
              $query2="SELECT * FROM galary ";
              $sql2=mysqli_query($con,$query2);

              while ($row = mysqli_fetch_assoc($sql2)) { 

                    $image = $row['galary_image'];
                    $image_src = "upload/gallery/".$image; ?>

                    <div class="col-md-4 ftco-animate">
                      <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url('<?php echo $image_src; ?>');">
                          <!-- <span class="price"><?php echo $row['title']; ?>/Per Day</span> -->
                        </a>
                        <div class="text p-4">
                          <h3><a href="#"><?php echo $row['title']; ?></a></h3>
                        </div>
                      </div>
                    </div>

        <?php } ?>

        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-about img"style="background-image: url('<?php echo $image_src2; ?>');">
			<div class="overlay"></div>
			<div class="container py-md-5">
				<div class="row py-md-5">
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