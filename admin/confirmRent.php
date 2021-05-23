<?php require_once "head.php"; ?>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-left ms-3" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute right-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="index.php">
        <span class="ms-1 font-weight-bold">Pathum Car Rent - Dashboard</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link  " href="index.php">
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="customer.php">
            <span class="nav-link-text ms-1"><i class="fas fa-users"> Customer</i></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="report.php">
            <span class="nav-link-text ms-1"><i class="fas fa-money-bill-alt"> Report</i></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="payment.php">
            <span class="nav-link-text ms-1"><i class="fas fa-money-check-alt"> Payment</i></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="car.php">
            <span class="nav-link-text ms-1"><i class="fas fa-car"> Car</i></span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link  " href="dealer.php">
            <span class="nav-link-text ms-1"><i class="fas fa-user-tie"> Dealer</i></span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link  active" href="rent.php">
            <span class="nav-link-text ms-1"><i class="fas fa-calendar-check"> Rent Car</i></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="employee.php">
            <span class="nav-link-text ms-1"><i class="fas fa-user"> Employee</i></span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content mt-1 border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="index.php">Admin</a></li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="rent.php">Rent</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Confirm Rent</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Confirm Rent</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
 
          </div>
          <ul class="navbar-nav  justify-content-end">
                         
               <li class="nav-item dropdown pe-2 d-flex align-items-center" style="margin-right: 13px;">
              <a href="albem.php" class="nav-link text-body p-0" id="dropdownMenuButton">
                <i style="font-size: 25px" class="fa fa-images cursor-pointer"></i>
              </a>
            </li>
              <li class="nav-item dropdown pe-2 d-flex align-items-center" style="margin-right: 13px;">
              <a href="messege.php" class="nav-link text-body p-0" id="dropdownMenuButton">
                  <i style="font-size: 25px" class="fa fa-envelope cursor-pointer"></i>
                <?php 
                    $viewquery = " SELECT * FROM message where msg_read = 'No' ";
                    $viewresult = mysqli_query($con,$viewquery);  
                    if ($number=mysqli_num_rows($viewresult) > 0) {?>
                        <span style="margin-left: 2px" class="text-danger"><b><?php echo $number; ?></b></span>
                  <?php } ?>
              </a>
            </li>
               <li class="nav-item dropdown pe-2 d-flex align-items-center" style="margin-right: 13px;">
              <a href="setting.php" class="nav-link text-body p-0" id="dropdownMenuButton">
                <i style="font-size: 25px" class="fa fa-cog cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i style="font-size: 25px" class="fa fa-user-cog cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" data-toggle="modal" data-target="#exampleModalPassChange">
                    <h5><i  class="fas fa-user-check"> Change Password</i></h5>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="logout.php">
                    <h5><i class="fas fa-key"> Sign Out</i></h5>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

     <!-- Modal -->
            <div class="modal fade" id="exampleModalPassChange" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    $g = $_SESSION['username'];

                    if(!empty($currentpass)){
                      if(!empty($newpass)){
                        if(!empty($confpass)){

                          $loginsql="SELECT * FROM employee WHERE password='".md5($currentpass)."'";
                          $result=mysqli_query($con,$loginsql) or mysqli_errno();
                          $rows=mysqli_fetch_assoc($result);

                          $query5="SELECT password FROM employee WHERE username='".$g."'";
                          $sql5=mysqli_query($con,$query5);
                          $row=mysqli_fetch_assoc($sql5);

                          if(isset($rows['password'])==isset($row['password']))
                          {
                            if($newpass==$confpass){
                              $query3="SELECT * FROM employee WHERE password='$newpass'";
                              $sql3=mysqli_query($con,$query3);

                              if(mysqli_num_rows($sql3)>0)
                              {
                                echo "password already Exsisted";
                              }
                              else
                              {
                                  $query2="UPDATE employee SET password='".md5($newpass)."' WHERE username='".$g."'";
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
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
          <div class="col-md-10">
            <h1 class="text-gray">Confirm Your Rent</h1>
          </div>
        </div>
        <div class="row">
              <div class="col-md-6 mt-4" style="font-family: \"Times New Roman\",Times, serif;">
                       <form class="reg_form bg-light p-4 border rounded" action="" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">

                              <div class="form-row">
                                 <div class="form-group col-md-12">
                                <label class="text-dark" for="fee"><b>Enter Customer Name or ID </b></label>
                                <input type="text" onchange="add();" class="form-control" name="customername" name="name" placeholder="Customer Name or ID">
                              </div>

                                  <div class="form-group col-md-12">
                                    <label class="text-dark" for="inputState"><b>Select Customer</b></label>
                                    <select id="inputState" name="customer" class="form-control">
                                      <option selected></option>';
                                     <?php 
                                         $q3 = "SELECT * FROM customer";
                                         $res3 = mysqli_query($con,$q3);
                                         $c=1;
                                         while($row=mysqli_fetch_assoc($res3)){
                                          $id = $row['id'];
                                           echo "<option value='$id' >".$row['name']."</option>";
                                           $c++;
                                         } ?>
                                    </select>
                                  </div>
                                  <p class="text-danger">You need to Use Only One option</p>
                                  </div>

                                  <div class="form-row mt-5">
                                    <div class="form-group col-md-12">
                                      <label for="inputState"><b>Payment Method</b></label>
                                      <select id="inputState" name="paymentoption" class="form-control">
                                        <option selected></option>
                                        <option>Cash</option>
                                        <option>Credit Card</option>
                                        <option>Online Payment</option>
                                      </select>
                                    </div>
                                    </div>

                                     <div class="form-row">
                                       <div class="form-group col-md-12">
                                      <label for="fee"><b>Paid Amount</b></label>
                                      <input type="number" class="form-control" name="amount" placeholder="Paid Amount">
                                    </div>
                                    </div>

                                    <div class="form-row">
                                      <div class="form-group col-md-12">
                                        <label for="name" class="a"><b>Vehical Pick-Up Time</b></label>
                                        <input type="time" class="form-control" id="pickupdate" name="pickupdate" placeholder="Start Time">
                                      </div>
                                    </div>

                              </div>

                          <button type="button" class="btn btn-dark" onclick="window.location.href ='rent.php' " data-bs-dismiss="modal">Back</button>
                          <button type="button" class="btn btn-primary" onclick="window.location.href ='rentcar.php' " data-bs-dismiss="modal">Find New Rent</button>
                          <button type="submit" name="submit" class="btn btn-primary">Confirm Booking</button>
                      </form>

                         <?php
                                    if(isset($_POST['submit'])){
                                      $customer = $_REQUEST['customer'];
                                      $customername = $_REQUEST['customername'];
                                      $paymentoption = $_REQUEST['paymentoption'];
                                      $amount = $_REQUEST['amount'];
                                      $pickupdate = $_REQUEST['pickupdate'];


                                      $cdate = date("Y/m/d m:H:s");

                                      $car_id = $_REQUEST['car_id'];
                                      $startdate = $_REQUEST['startdate'];
                                      $duedate = $_REQUEST['duedate'];
                                      $total = $_REQUEST['total'];


                                      $query1="SELECT * FROM rent WHERE car_id='$car_id'";
                                      $sql1=mysqli_query($con,$query1);
                                      $row=mysqli_fetch_assoc($sql1);

                                      $q3 = "SELECT * FROM carreg where car_id = '$car_id' ";
                                      $res3 = mysqli_query($con,$q3);
                                      $row1=mysqli_fetch_assoc($res3);
                                      $fee = $row1['rent_fee'];
                                      $car_number = $row1['car_number'];

                                      if (!empty($customer) && !empty($customername)) {
                                          echo "<script type=\"text/javascript\"> alert(\"Please Select One Customer Selecting Option\");</script>";
                                      }else if (!empty($customer)) {
                                        if (!empty($paymentoption)) {
                                          if (!empty($amount)) {
                                            if (!empty($pickupdate)) {


                                                if ($row1['available'] == 'Yes') {
                                                  if (new DateTime() <= new DateTime($startdate)) {
                                                    if (new DateTime($startdate) <= new DateTime($duedate)) {

                                                           $query2="SELECT * FROM rent WHERE car_id = '$car_id' AND status != 'Canceled' AND returncar = 'No' AND NOT(due_date < '$startdate' OR startdate > '$duedate') ";
                                                           $sql2=mysqli_query($con,$query2);

                                                            if(mysqli_num_rows($sql2)>0)
                                                            {
                                                              echo "<script type=\"text/javascript\"> alert(\"Sorry! This Car Not Available this Day Now.\"); window.location.href=\"rentcar.php\"</script>";
                                                            }
                                                            else
                                                            {

                                                              $diff = abs(strtotime($startdate) - strtotime($duedate));
                                                              $years = floor($diff / (365*60*60*24));
                                                              $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                                                              $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

                                                              $total = $fee * $days;

                                                              if ($amount >= $total) {

                                                                $balance = $amount - $total;

                                                                 $q1="INSERT INTO rent(car_id,customer_id,due_date,totle_fee,trn_date,car_number,extend,car_pick,startdate,payment,returncar,status) values('$car_id','$customer','$duedate','$total','$cdate','$car_number','No','$pickupdate','$startdate','$paymentoption','No','Pending')";
                                                                        $res1=mysqli_query($con,$q1);
                                                                  if ( $res1) {

                                                                       echo '<script>alert("Car Rent Adding is Scussessfully. Yor Balance is '.$balance.' "); window.location.href="rent.php"; </script>';
                                                                      
                                                                  }else{
                                                                    echo "<script>alert(\"Car Rent is Not Scussess\");</script>";
                                                                  }
                    
                                                              }elseif ($amount == $total) {

                                                                $q1="INSERT INTO rent(car_id,customer_id,due_date,totle_fee,trn_date,car_number,extend,car_pick,startdate,payment,returncar,status) values('$car_id','$customer','$duedate','$total','$cdate','$car_number','No','$pickupdate','$startdate','$paymentoption','No','Pending')";
                                                                        $res1=mysqli_query($con,$q1);
                                                                  if ( $res1) {

                                                                       echo '<script>alert("Car Rent Adding is Scussessfully."); window.location.href="rent.php"; </script>';
                                                                      
                                                                  }else{
                                                                    echo "<script>alert(\"Car Rent is Not Scussess\");</script>";
                                                                  }
                                                              }else{echo "<script type=\"text/javascript\"> alert(\"Your Total is ".$total." You needs to pay this Amount\");</script>";}
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
                                            }else{echo "<script type=\"text/javascript\"> alert(\"Select Pick-Up Time\");</script>";}
                                          }else{echo "<script type=\"text/javascript\"> alert(\"Enter Paid Amount\");</script>";}
                                        }else{echo "<script type=\"text/javascript\"> alert(\"Select payment Option\");</script>";}

                                      }else if (!empty($customername)) {

                                        $query1="SELECT * FROM customer WHERE name ='$customername' OR id ='$customername' ";
                                        $sql1=mysqli_query($con,$query1);
                                        if($row=mysqli_fetch_assoc($sql1)){

                                          $customer_id = $row['id'];


                                            if (!empty($paymentoption)) {
                                              if (!empty($amount)) {
                                                if (!empty($pickupdate)) {


                                                    if ($row1['available'] == 'Yes') {
                                                      if (new DateTime() <= new DateTime($startdate)) {
                                                        if (new DateTime($startdate) <= new DateTime($duedate)) {

                                                               $query2="SELECT * FROM rent WHERE car_id = '$car_id' AND status != 'Canceled' AND returncar = 'No' AND NOT(due_date < '$startdate' OR startdate > '$duedate') ";
                                                               $sql2=mysqli_query($con,$query2);

                                                                if(mysqli_num_rows($sql2)>0)
                                                                {
                                                                  echo "<script type=\"text/javascript\"> alert(\"Sorry! This Car Not Available this Day Now.\"); window.location.href=\"rentcar.php\"</script>";
                                                                }
                                                                else
                                                                {

                                                                  $diff = abs(strtotime($startdate) - strtotime($duedate));
                                                                  $years = floor($diff / (365*60*60*24));
                                                                  $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                                                                  $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

                                                                  $total = $fee * $days;

                                                                  if ($amount >= $total) {

                                                                    $balance = $amount - $total;

                                                                     $q1="INSERT INTO rent(car_id,customer_id,due_date,totle_fee,trn_date,car_number,extend,car_pick,startdate,payment,returncar,status) values('$car_id','$customer_id','$duedate','$total','$cdate','$car_number','No','$pickupdate','$startdate','$paymentoption','No','Pending')";
                                                                            $res1=mysqli_query($con,$q1);
                                                                      if ( $res1) {

                                                                           echo '<script>alert("Car Rent Adding is Scussessfully. Yor Balance is '.$balance.' "); window.location.href="rent.php"; </script>';
                                                                          
                                                                      }else{
                                                                        echo "<script>alert(\"Car Rent is Not Scussess\");</script>";
                                                                      }
                        
                                                                  }elseif ($amount == $total) {

                                                                    $q1="INSERT INTO rent(car_id,customer_id,due_date,totle_fee,trn_date,car_number,extend,car_pick,startdate,payment,returncar,status) values('$car_id','$customer','$duedate','$total','$cdate','$car_number','No','$pickupdate','$startdate','$paymentoption','No','Pending')";
                                                                            $res1=mysqli_query($con,$q1);
                                                                      if ( $res1) {

                                                                           echo '<script>alert("Car Rent Adding is Scussessfully."); window.location.href="rent.php"; </script>';
                                                                          
                                                                      }else{
                                                                        echo "<script>alert(\"Car Rent is Not Scussess\");</script>";
                                                                      }
                                                                  }else{echo "<script type=\"text/javascript\"> alert(\"Your Total is ".$total." You needs to pay this Amount\");</script>";}
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
                                                }else{echo "<script type=\"text/javascript\"> alert(\"Select Pick-Up Time\");</script>";}
                                              }else{echo "<script type=\"text/javascript\"> alert(\"Enter Paid Amount\");</script>";}
                                            }else{echo "<script type=\"text/javascript\"> alert(\"Select payment Option\");</script>";}

                                        }else{echo "<script type=\"text/javascript\"> alert(\"Customer Name or Id Wrong. Please Check Correct or Register Customer First\");</script>";}
                                      
                                      }else{echo "<script type=\"text/javascript\"> alert(\"Select Customer\");</script>";}

                                  } ?>
                    </div>
                    <div style="font-family: 'Times New Roman', Times, serif;" class="col-md-5 p-5 border border-info bg-gradient-info">
                      <div class="row">
                        <h1 class="text-danger" style="text-transform: uppercase;">Rent Summery</h1>
                      </div>
                      <div class="row mt-2">
                        <div class="col-md-6"><h6 style="color: green; font-weight: bold;">Car Number  </h6></div>
                        <?php 
                          $car_id = $_REQUEST['car_id'];

                          $q4 = "SELECT * FROM carreg where car_id ='$car_id'";
                          $res4 = mysqli_query($con,$q4);
                          $row2=mysqli_fetch_assoc($res4);

                          $image = $row2['image'];
                          $image_src = "../upload/car/".$image; ?>

                        <div class="col-md-5"><h6 class="text-light">: <?php echo $row2["car_number"]; ?></h6></div>
                      </div>
                      <div class="row">
                        <div class="col-md-6"><h6 style="color: green; font-weight: bold;">Start Date & Time  </h6></div>
                        <div class="col-md-5"><h6 class="text-light">: <?php echo $_REQUEST["startdate"]; ?></h6></div>
                      </div>
                      <div class="row">
                        <div class="col-md-6"><h6 style="color: green; font-weight: bold;">Due Date & Time </h6></div>
                        <div class="col-md-5"><h6 class="text-light">: <?php echo $_REQUEST["duedate"]; ?></h6></div>
                      </div>
                      <div class="row">
                        <div class="col-md-6"><h6 style="color: green; font-weight: bold;">Total Amount </h6></div>
                        <div class="col-md-5"><h6 class="text-light">: <?php if (!empty($total)) {
                          echo $total;
                        }else{
                          echo $_REQUEST["total"];
                        } ?></h6></div>
                      </div>

                      
                      <div class="row mt-3">
                        <h4 class="text-white"><?php echo $row2["title"]; ?></h4>
                      </div>

                      <div class="row">
                        <img width="100px" src='<?php echo $image_src; ?>'>
                      </div>
                    </div>
              </div>
    </div> 

    
      <footer class="footer pt-3">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-left">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, Pathum Car Rent | Created By :  D.H.G.R.N. WICKRAMASINGHE | SEU/IS/16/MIT/052
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.1"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script src="../assets/js/plugins/Chart.extension.js"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          backgroundColor: "#fff",
          data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
          display: false,
        },
        tooltips: {
          enabled: true,
          mode: "index",
          intersect: false,
        },
        scales: {
          yAxes: [{
            gridLines: {
              display: false,
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 0,
              fontSize: 14,
              lineHeight: 3,
              fontColor: "#fff",
              fontStyle: 'normal',
              fontFamily: "Open Sans",
            },
          }, ],
          xAxes: [{
            gridLines: {
              display: false,
            },
            ticks: {
              display: false,
              padding: 20,
            },
          }, ],
        },
      },
    });

    var ctx2 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

    var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
    gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors


    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
            label: "Mobile apps",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#cb0c9f",
            borderWidth: 3,
            backgroundColor: gradientStroke1,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6

          },
          {
            label: "Websites",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#3A416F",
            borderWidth: 3,
            backgroundColor: gradientStroke2,
            data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
            maxBarThickness: 6

          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
          display: false,
        },
        tooltips: {
          enabled: true,
          mode: "index",
          intersect: false,
        },
        scales: {
          yAxes: [{
            gridLines: {
              borderDash: [2],
              borderDashOffset: [2],
              color: '#dee2e6',
              zeroLineColor: '#dee2e6',
              zeroLineWidth: 1,
              zeroLineBorderDash: [2],
              drawBorder: false,
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              fontSize: 11,
              fontColor: '#adb5bd',
              lineHeight: 3,
              fontStyle: 'normal',
              fontFamily: "Open Sans",
            },
          }, ],
          xAxes: [{
            gridLines: {
              zeroLineColor: 'rgba(0,0,0,0)',
              display: false,
            },
            ticks: {
              padding: 10,
              fontSize: 11,
              fontColor: '#adb5bd',
              lineHeight: 3,
              fontStyle: 'normal',
              fontFamily: "Open Sans",
            },
          }, ],
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>