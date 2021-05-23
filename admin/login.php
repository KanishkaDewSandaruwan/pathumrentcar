<?php 
    require_once "connection.php";
    session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pathum Car Rent</title>
    <link rel="icon" type="image/png" href="../img/logo.png" sizes="300x300" />

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST">
              <h1>Pathum Car Rent | Login</h1>
              <div>
                <input type="text" class="form-control" name="uname" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="pass" placeholder="Password" required="" />
              </div>
              <div>
                <button class="btn btn-lg col-md-12 btn-primary submit" type="submit" name="submit">Log in</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div>
                  <p>Pathum Car Rent | Created By :  D.H.G.R.N. WICKRAMASINGHE | SEU/IS/16/MIT/052</p>
                </div>
              </div>
              <?php if(isset($_POST['submit'])) {

                      $uname = stripslashes($_REQUEST['uname']);
                      $password = stripslashes($_REQUEST['pass']);

                      $signin = "SELECT * FROM employee WHERE username ='$uname' AND password ='".md5($password)."'";
                      $result3 = mysqli_query($con,$signin) or mysqli_errno();
                      $rows4 = mysqli_num_rows($result3);
                      
                      if($rows4==1){
                          if ($row1 = mysqli_fetch_assoc($result3)) {

                              $id = $row1['username'];
                              $_SESSION['username']=$id;
                              echo "<script type=\"text/javascript\">window.location.href='index.php'; </script>";
                          }
                      }
                      else{

                          echo "<script>alert(\"Username or Password is incorrect.\");window.location.href=\"login.php\";</script>";
                      }
                  } ?>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
