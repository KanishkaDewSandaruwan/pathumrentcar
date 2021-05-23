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
          <a class="nav-link  active" href="payment.php">
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Payment</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Payment</h6>
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
          <div class="col-md-4">
            <h1 class="text-info">Payments</h1>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-2">
            <button class="btn btn-lg col-md-12 btn-primary" onclick="window.location.href='paydealer.php'">Dealer Payment</button>
          </div>
          <div class="col-md-2">
            <button class="btn btn-lg col-md-12 btn-primary" onclick="window.location.href='paysallery.php'">Sallery Payment</button>
          </div>
          <div class="col-md-2">
            <button class="btn btn-lg col-md-12 btn-primary" onclick="window.location.href='payother.php'">Other Payment</button>
          </div>
        </div>
          
          <div class="row mt-5 ">
              <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Dealer Payment</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Sallery Payment</a>
                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Other Payment</a>
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                      <div class="col-md-12 mt-4">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-dark">
                                            <th class="border-top-0 text-white">Action</th>
                                            <th class="border-top-0 text-white">Dealer</th>
                                            <th class="border-top-0 text-white">Month</th>
                                            <th class="border-top-0 text-white">Total Payment</th>
                                            <th class="border-top-0 text-white">Number of Incomes</th>
                                            <th class="border-top-0 text-white">Paid</th>
                                            <th class="border-top-0 text-white">Paid Date</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                    $viewquery = " SELECT * FROM delar_payment ";
                                    $viewresult = mysqli_query($con,$viewquery);

                                     ?>
                                    <tbody>
                                      <?php while($row = mysqli_fetch_assoc($viewresult)) { 
                                        $delar_id = $row['delar_id'];

                                        $q5 = "SELECT * FROM delar where dealer_id ='$delar_id'";
                                        $res5 = mysqli_query($con,$q5);
                                        $row3=mysqli_fetch_assoc($res5);
                                        
                                        ?>
                                        <tr>
                                            <td>
                                                <div class="dropdown">
                                                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Action
                                                  </button>
                                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="delete.php?dp_id=<?php echo $row['dp_id']; ?>"><i class="fas fa-trash-alt"> Delete</i></a></li>
                                                  </ul>
                                                </div>
                                            </td>
                                            <td><h6><?php echo $row3['name']; ?> <br><?php echo $row3['address']; ?><br><?php echo $row3['mobile']; ?></h6></td>
                                            <td><h6><?php echo $row['month']; ?></h6></td>
                                            <td><h6><?php echo $row['delar_totle_income']; ?></h6></td>
                                            <td><h6><?php echo $row['delar_number_of_income']; ?></h6></td>
                                            <td><h6><?php echo $row['paid']; ?></h6></td>
                                            <td><h6><?php echo $row['trndate']; ?></h6></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      <div class="col-md-12 mt-4">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-dark">
                                            <th class="border-top-0 text-white">Action</th>
                                            <th class="border-top-0 text-white">Employee</th>
                                            <th class="border-top-0 text-white">Month</th>
                                            <th class="border-top-0 text-white">Basic Sallery</th>
                                            <th class="border-top-0 text-white">OT Hours</th>
                                            <th class="border-top-0 text-white">OT Pyament</th>
                                            <th class="border-top-0 text-white">Total Sallery</th>
                                            <th class="border-top-0 text-white">Paid</th>
                                            <th class="border-top-0 text-white">Paid Date</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                    $viewquery = " SELECT * FROM salary_pay";
                                    $viewresult = mysqli_query($con,$viewquery);

                                     ?>
                                    <tbody>
                                      <?php while($row = mysqli_fetch_assoc($viewresult)) { 
                                        $employee_id = $row['employee_id'];

                                        $q5 = "SELECT * FROM employee where emp_id ='$employee_id'";
                                        $res5 = mysqli_query($con,$q5);
                                        $row3=mysqli_fetch_assoc($res5);
                                        
                                        ?>
                                        <tr>
                                            <td>
                                                <div class="dropdown">
                                                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Action
                                                  </button>
                                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="delete.php?salary_payment_id=<?php echo $row['salary_payment_id']; ?>"><i class="fas fa-trash-alt"> Delete</i></a></li>
                                                  </ul>
                                                </div>
                                            </td>
                                            <td><h6><?php echo $row3['name']; ?> <br><?php echo $row3['address']; ?><br><?php echo $row3['mobile']; ?></h6></td>
                                            <td><h6><?php echo $row['month']; ?></h6></td>
                                            <td><h6><?php echo $row['basic_salary']; ?></h6></td>
                                            <td><h6><?php echo $row['ot_houre']; ?></h6></td>
                                            <td><h6><?php echo $row['ot_amount']; ?></h6></td>
                                            <td><h6><?php echo $row['salary']; ?></h6></td>
                                            <td><h6><?php echo $row['paid']; ?></h6></td>
                                            <td><h6><?php echo $row['trndate']; ?></h6></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="col-md-12">
                          <div class="card">
                              <div class="table-responsive">
                                   <table class="table v-middle">
                                      <thead>
                                          <tr class="bg-dark">
                                              <th class="border-top-0 text-white">Action</th>
                                              <th class="border-top-0 text-white">Bill Code</th>
                                              <th class="border-top-0 text-white">Reason</th>
                                              <th class="border-top-0 text-white">Billed Date</th>
                                              <th class="border-top-0 text-white">Paid Amount</th>
                                              <th class="border-top-0 text-white">Paid Date</th>
                                              <th class="border-top-0 text-white">Paid</th>
                                          </tr>
                                      </thead>
                                      <?php 
                                      $viewquery = " SELECT * FROM other_payment";
                                      $viewresult = mysqli_query($con,$viewquery);

                                       ?>
                                      <tbody>
                                        <?php while($row = mysqli_fetch_assoc($viewresult)) { ?>
                                          <tr>
                                              <td>
                                                  <div class="dropdown">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                      Action
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                      <li><a class="dropdown-item" href="delete.php?payment_id=<?php echo $row['payment_id']; ?>"><i class="fas fa-trash-alt"> Delete</i></a></li>
                                                    </ul>
                                                  </div>
                                              </td>
                                              <td><h6><?php echo $row['bile_code']; ?></h6></td>
                                              <td><h6><?php echo $row['reson']; ?></h6></td>
                                              <td><h6><?php echo $row['billed_date']; ?></h6></td>
                                              <td><h6><?php echo $row['amount']; ?></h6></td>
                                              <td><h6><?php echo $row['paid_date']; ?></h6></td>
                                              <td><h6><?php echo $row['paid']; ?></h6></td>
                                          </tr>
                                          <?php } ?>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
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
                <h1 style="font-family: \"Times New Roman\",Times, serif; text-align:center" class ="text-danger text-center" >Rent Car</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <form class="reg_form bg-light p-4 border rounded" action="" method="POST" enctype="multipart/form-data">
                      <div class="modal-body">

                                <div class="form-row">
                                  <div class="form-group col-md-12">
                                    <label for="inputState"><b>Car</b></label>
                                    <select id="inputState" onchange="getTotal()" name="car" id="car" class="form-control">
                                      <option selected></option>';
                                     <?php 
                                         $q3 = "SELECT * FROM carreg";
                                         $res3 = mysqli_query($con,$q3);
                                         $c=1;
                                         while($row=mysqli_fetch_assoc($res3)){
                                          $id = $row['car_id'];
                                           echo "<option value='$id' >".$row['car_number']."</option>";
                                           $c++;
                                         } ?>
                                    </select>
                                  </div>
                                  </div>

                                  <div class="form-row">
                                  <div class="form-group col-md-12">
                                    <label for="inputState"><b>Customer</b></label>
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
                                  </div>

                                  <div class="form-row">
                                      <div class="form-group col-md-12">
                                        <label for="name" class="a"><b>Due Date</b></label>
                                        <input type="date" class="form-control" id="duedate" name="duedate" placeholder="Due Date">
                                      </div>
                                    </div>

                                    <script type="text/javascript">
                                      function getTotal(){

                                        <?php 
                                          $total = 10;
                                          $duedate = "<script>document.getElementByID('duedate').value;</script>";
                                          $car = "<script>document.getElementByID('car').value;</script>";

                                          $q3 = "SELECT * FROM carreg where car_id = '$car' ";
                                          $res3 = mysqli_query($con,$q3); 
                                          $row=mysqli_fetch_assoc($res3);

                                          $fee = $row['rent_fee'];
                                          // $total = $fee * 10;

                                          ?>
                                      }

                                    </script>


                                    <div class="form-row">
                                      <div class="form-group col-md-12">
                                        <label><b>Totale Fee</b></label>
                                        <input type="number" class="form-control" value="<?php echo $fee; ?>" disabled name="model" placeholder="Totale Fee">
                                      </div>
                                    </div>

                                    <div class="form-row">
                                    <div class="form-group col-md-12">
                                      <label for="color"><b>Car Color</b></label>
                                      <input type="text" class="form-control"  name="color" placeholder="Car Color">
                                    </div>
                                    </div>

                                    <div class="form-row">
                                    <div class="form-group col-md-12">
                                      <label for="chasi"><b>Chasi Number</b></label>
                                      <input type="text" class="form-control" name="chasi" placeholder="Chasi Number">
                                    </div>
                                    </div>

                                    <div class="form-row">
                                       <div class="form-group col-md-12">
                                      <label for="carnumber"><b>Car Number</b></label>
                                      <input type="text" style="text-transform: uppercase;" class="form-control" name="carnumber" placeholder="Car Number">
                                    </div>
                                    </div>

                                      <div class="form-row">
                                       <div class="form-group col-md-12">
                                      <label for="fee"><b>Rent Fee</b></label>
                                      <input type="text" style="text-transform: uppercase;" class="form-control" name="fee" placeholder="Rent Fee">
                                    </div>
                                    </div>

                                    <div class="form-row">
                                    <div class="form-group col-md-12">
                                      <label for="inputState"><b>Availability</b></label>
                                      <select id="inputState" name="available" class="form-control">
                                        <option selected></option>
                                        <option>Yes</option>
                                        <option>No</option>
                                      </select>
                                    </div>
                                    </div>
                        </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </form>
                              <?php
                                    if(isset($_POST['submit'])){
                                      $dealer = $_REQUEST['dealer'];
                                      $manufacture = $_REQUEST['manufacture'];
                                      $model = $_REQUEST['model'];
                                      $color = $_REQUEST['color'];
                                      $chasi = $_REQUEST['chasi'];
                                      $carnumber = $_REQUEST['carnumber'];
                                      $fee = $_REQUEST['fee'];
                                      $available = $_REQUEST['available'];
                                      $cdate = date("Y/m/d m:H:s");


                                      if(!empty($dealer)){
                                        if(!empty($manufacture)){
                                            if(!empty($model)){
                                              if(!empty($color)){
                                                if(!empty($chasi)){
                                                    if(!empty($carnumber)){
                                                          if(!empty($fee)){
                                                            if(!empty($available)){

                                                              $query3="SELECT * FROM carreg WHERE car_number='$carnumber'";
                                                              $sql3=mysqli_query($con,$query3);

                                                              if(mysqli_num_rows($sql3)>0){
                                                                  echo "<script>alert(\"Car Number already Exsisted\");</script>";
                                                              }else{
                                                                  $q1="INSERT INTO carreg(delar_code,manufacture,model,color,chasi_number,car_number,rent_fee,available,trndate) values('$dealer','$manufacture','$model','$color','$chasi','$carnumber','$fee','$available','$cdate')";
                                                                        $res1=mysqli_query($con,$q1);
                                                                        if ( $res1) {

                                                                             echo '<script>alert("Car Registration is Scussessfully."); window.location.href="car.php";
                                                                                          </script>';
                                                                            
                                                                        }else{
                                                                          echo "<script>alert(\"Car Registration is Not Scussess\");</script>";
                                                                        }
                                                                }
                                                            }else{ echo "<script>alert(\"Select Availability\");</script>";}
                                                          }else{ echo "<script>alert(\"Enter Rent Fee\");</script>";}
                                                    }else{ echo "<script>alert(\"Enter Car Number\");</script>";}
                                                }else {echo "<script>alert(\"Enter Chasi Number\");</script>";}
                                              }else{ echo "<script>alert(\"Enter Color\");</script>";}
                                            }else{ echo "<script>alert(\"Enter Model\");</script>";}
                                        }else{ echo "<script>alert(\"Enter Manufacture\");</script>";}
                                      }else{ echo "<script>alert(\"Select Dealer Name\");</script>";} 
                                  } ?>
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