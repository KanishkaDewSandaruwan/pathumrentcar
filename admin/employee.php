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
          <a class="nav-link  " href="rent.php">
            <span class="nav-link-text ms-1"><i class="fas fa-calendar-check"> Rent Car</i></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  active" href="employee.php">
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
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
          <div class="col-md-2">
            <button class="btn btn-lg  btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New</button>
          </div>
          <div class="col-md-10">
            <h1 class="text-gray">Employee Managment</h1>
          </div>
        </div>
        <div class="row">
              <div class="col-md-12 mt-4" style="font-family: \"Times New Roman\",Times, serif;">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table v-middle text-left">
                                    <thead>
                                        <tr class="bg-primary">
                                            <th class="border-top-0 text-white">Employee Name</th>
                                            <th class="border-top-0 text-white">Phone Number</th>
                                            <th class="border-top-0 text-white">Email Address</th>
                                            <th class="border-top-0 text-white">Address</th>
                                            <th class="border-top-0 text-white">NIC</th>
                                            <th class="border-top-0 text-white">Basic Salary</th>
                                            <th class="border-top-0 text-white">Action</th>
                                        </tr>
                                    </thead>
                                    <?php $count=1;
                                      $getcat = "SELECT * FROM employee";
                                      $viewresult = mysqli_query($con, $getcat);
                                        
                                      ?>
                                    <tbody>
                                      <?php while($row = mysqli_fetch_assoc($viewresult)) { 
                                        if ($row['username'] != 'admin') {?>
                                        <tr>
                                            <td><h6><?php echo $row['name']; ?></h6></td>
                                            <td><h6><?php echo $row['mobile']; ?></h6></td>
                                            <td><h6><?php echo $row['email']; ?></h6></td>
                                            <td><h6><?php echo $row['address']; ?></h6></td>
                                            <td><h6><?php echo $row['nic']; ?></h6></td>
                                            <td><h6><?php echo $row['basic_salary']; ?></h6></td>
                                            <td>
                                                <div class="dropdown">
                                                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Action
                                                  </button>
                                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="edit_employee.php?emp_id=<?php echo $row['emp_id']; ?>"><i class="fas fa-edit"> Edit</i></a></li>
                                                    <li><a class="dropdown-item" href="delete.php?emp_id=<?php echo $row['emp_id']; ?>"><i class="fas fa-trash-alt"> Delete</i></a></li>
                                                  </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php }  $count++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
              </div>
    </div> 

      <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                <h1 style="font-family: \"Times New Roman\",Times, serif; text-align:center" class ="text-danger text-center" >Register Employee</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form class="reg_form bg-light p-4 border rounded" action="" method="POST" enctype="multipart/form-data">

                                  <div class="form-row">
                                      <div class="form-group col-md-12">
                                        <label for="name" class="a"><b>Full Name</b></label>
                                        <input type="text" class="form-control" name="name" placeholder="Full Name">
                                      </div>
                                    </div>

                                    <div class="form-row">
                                      <div class="form-group col-md-12">
                                        <label><b>Email</b></label>
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                                      </div>
                                    </div>

                                    <div class="form-row">
                                    <div class="form-group col-md-12">
                                      <label for="address"><b>Address</b></label>
                                      <input type="text" class="form-control"  name="address" placeholder="Address">
                                    </div>
                                    </div>

                                    <div class="form-row">
                                    <div class="form-group col-md-12">
                                      <label for="phone"><b>Phone Number</b></label>
                                      <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                                    </div>
                                    </div>

                                    <div class="form-row">
                                       <div class="form-group col-md-12">
                                      <label for="phone"><b>NIC Number</b></label>
                                      <input type="text" style="text-transform: uppercase;" class="form-control" name="nic" placeholder="NIC Number">
                                    </div>
                                    </div>

                                    <div class="form-row">
                                       <div class="form-group col-md-12">
                                      <label for="phone"><b>Basic Sallery</b></label>
                                      <input type="number" class="form-control" name="basic" placeholder="Basic Sallery">
                                    </div>
                                    </div>

                                      <div class="form-row">
                                       <div class="form-group col-md-12">
                                      <label for="phone"><b>Usename</b></label>
                                      <input type="text" style="text-transform: uppercase;" class="form-control" name="uname" placeholder="Username">
                                    </div>
                                    </div>

                                    <div class="form-row">
                                      <div class="form-group col-md-12">
                                      <label for="phone"><b>Password</b></label>
                                      <input type="password" class="form-control" name="pass" placeholder="Password">
                                    </div>
                                    </div>

                                    <div class="form-row">
                                    <div class="form-group col-lg-12">
                                      <label for="phone"><b>Confirm Password</b></label>
                                      <input type="password" class="form-control" name="conf_pass" placeholder="Confirm Password">
                                    </div>
                                    </div>
   

                  <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                              <?php
                                    if(isset($_POST['submit'])){
                                      $fname = $_REQUEST['name'];
                                      $emails = $_REQUEST['email'];
                                      $address = $_REQUEST['address'];
                                      $phone = $_REQUEST['phone'];
                                      $basic = $_REQUEST['basic'];
                                      $nic = $_REQUEST['nic'];
                                      $uname = $_REQUEST['uname'];
                                      $pass = $_REQUEST['pass'];
                                      $conf_pass = $_REQUEST['conf_pass'];
                                      $cdate = date("Y/m/d m:H:s");


                                      if(!empty($fname)){
                                        if(!empty($emails)){
                                          if(filter_var($emails, FILTER_VALIDATE_EMAIL)){
                                            if(!empty($address)){
                                              if(!empty($phone)){
                                              if(!empty($nic)){
                                                if(preg_match("/^([0]([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
                                                    if(!empty($basic)){
                                                      if(!empty($uname)){
                                                          if(!empty($pass)){
                                                            if(!empty($conf_pass)){
                                                              if($pass==$conf_pass){
                                                                  $query2="SELECT * FROM employee WHERE username='$uname'";
                                                                      $sql2=mysqli_query($con,$query2);

                                                                      if(mysqli_num_rows($sql2)>0){
                                                                          echo "<script>alert(\"Username already Exsisted\");</script>";
                                                                      }else{
                                                                          $query3="SELECT * FROM delar WHERE username='$uname'";
                                                                          $sql3=mysqli_query($con,$query3);

                                                                          if(mysqli_num_rows($sql3)>0){
                                                                              echo "<script>alert(\"Username already Exsisted\");</script>";
                                                                          }else{
                                                                                $query3="SELECT * FROM customer WHERE email='$emails'";
                                                                                $sql3=mysqli_query($con,$query3);

                                                                                if(mysqli_num_rows($sql3)>0){
                                                                                    echo "<script>alert(\"Email already Exsisted\");</script>";
                                                                                }else{
                                                                                      $q1="INSERT INTO employee(name,address,mobile,email,nic,username,password,basic_salary,trndate) values('$fname','$address','$phone','$emails','$nic','$uname','".md5($pass)."','$basic','$cdate')";
                                                                                            $res1=mysqli_query($con,$q1);
                                                                                            if ( $res1) {

                                                                                                 echo '<script>alert("Employee Registration is Scussessfully."); window.location.href="employee.php";
                                                                                                              </script>';
                                                                                                
                                                                                            }else{
                                                                                              echo "<script>alert(\"Employee Registration is Not Scussess\");</script>";
                                                                                            }
                                                                                      }
                                                                                }
                                                                            }
                                                              }else{echo "<script>alert(\"Password is Not Match\");</script>";}
                                                            }else{ echo "<script>alert(\"Enter Confirm Password\");</script>";}
                                                          }else{ echo "<script>alert(\"Enter Password\");</script>";}
                                                      }else{ echo "<script>alert(\"Enter Username\");</script>";}
                                                    }else{ echo "<script>alert(\"Enter Basic Sallery\");</script>";}
                                                  }else {echo "<script>alert(\"Enter Valid Phone Number\");</script>";}
                                                }else {echo "<script>alert(\"Enter NIC Number\");</script>";}
                                              }else{ echo "<script>alert(\"Enter Phone Number\");</script>";}
                                            }else{ echo "<script>alert(\"Enter Address\");</script>";}
                                          }else {echo "<script>alert(\"Enter Valid Email Address\");</script>";}
                                        }else{ echo "<script>alert(\"Enter Email\");</script>";}
                                      }else{ echo "<script>alert(\"Enter Full Name\");</script>";} 
                                  } ?>
                  </div>
                </form>
              </div>
            </div>
      <footer class="footer pt-3">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-left">
                ?? <script>
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