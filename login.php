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
    <link rel="icon" type="image/png" href="img/logo.png" sizes="300x300" />

    <title>Pathum Car Rent</title>

    <!-- Bootstrap -->
    <link href="admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="admin/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="admin/build/css/custom.min.css" rel="stylesheet">
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
                <input type="text" class="form-control" name="email" placeholder="Username" required="" />
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

                      $email = stripslashes($_REQUEST['email']);
                      $password = stripslashes($_REQUEST['pass']);

                      $signin = "SELECT * FROM customer WHERE email ='$email' AND password ='".md5($password)."'";
                      $result3 = mysqli_query($con,$signin) or mysqli_errno();
                      $rows4 = mysqli_num_rows($result3);
                      
                      if($rows4==1){
                          if ($row1 = mysqli_fetch_assoc($result3)) {

                              $id = $row1['id'];
                              $_SESSION['id']=$id;
                              echo "<script type=\"text/javascript\">window.location.href='index.php'; </script>";
                          }
                      }
                      else{

                          echo "<script>alert(\"Username or Password is incorrect.\");window.location.href=\"login.php\";</script>";
                      }
                  } ?>
            </form>
            <p class="text-sm mt-3 mb-0">Already have an account? <a href="register.php" class="text-dark font-weight-bolder">Sign in</a></p>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
