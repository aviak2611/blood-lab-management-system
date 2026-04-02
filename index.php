<?php
// session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <title>LifeSource Labs</title>
  <!-- Simple bar CSS -->
  <link rel="stylesheet" href="css/simplebar.css">
  <!-- Fonts CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- Icons CSS -->
  <link rel="stylesheet" href="css/feather.css">
  <!-- Date Range Picker CSS -->
  <link rel="stylesheet" href="css/daterangepicker.css">
  <!-- App CSS -->
  <link rel="stylesheet" href="css/app-light.css" id="lightTheme">
  <link rel="stylesheet" href="css/app-dark.css" id="darkTheme" disabled>
</head>
<style>
  body {
    overflow-x: hidden;
    overflow-y: hidden;
  }

  .colored-toast.swal2-icon-success {
    background-color: #a5dc86 !important;
  }
</style>

<body class="light ">
  <div class="wrapper vh-100">
    <div class="row align-items-center h-100">
      <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" action="index.php" method="POST" autocomplete="off">
        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="">
          <img src="icons/modernlab.png" alt="Brand logo" class="img-fluid" style="height: 250px;margin-bottom: -30px;">
        </a>
        <h1 class="h6 mb-3 mt-2">Sign in</h1>
        <div class="form-group">
          <label for="inputEmail" class="sr-only" id="">Email address</label>
          <input type="email" id="login1
          mail" name="loginmail" class="form-control form-control-lg" placeholder="Email address" required="" autofocus="">
        </div>
        <div class="form-group">
          <label for="inputPassword" class="sr-only" id="">Password</label>
          <input type="password" id="loginpass" name="loginpass" class="form-control form-control-lg" placeholder="Password" required="">
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Let me in</button>
        <p class="mt-5 mb-3 text-muted">© 2024.LifeSource</p>
      </form>
    </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/moment.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/simplebar.min.js"></script>
  <script src='js/daterangepicker.js'></script>
  <script src='js/jquery.stickOnScroll.js'></script>
  <script src="js/tinycolor-min.js"></script>
  <script src="js/config.js"></script>
  <script src="js/apps.js"></script>
  <script src="js/sweetalert2.all.min.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-56159088-1');
  </script>
  <?php
  if (isset($_POST['submit'])) {
    include 'backend/connection.php';
    $usermails = $_POST['loginmail'];
    $userpassword = $_POST['loginpass'];
    $userpasswordencrypt = md5($userpassword);
    // $_SESSION['getmail'] = $usermails;
    $adminloginquery = "select * from admitable where adminuser='$usermails' and adminpass='$userpasswordencrypt'";
    $adminloginqueryrun = mysqli_query($con, $adminloginquery);
    $loginquery = "select cust_mail,cust_pass from cust_registration where cust_mail='$usermails' AND cust_pass='$userpasswordencrypt'";
    $loginqueryrun = mysqli_query($con, $loginquery);
    // if($usermails=="Lifesourceadmin@gmail.com" && $userpassword="987654321"){
    if (mysqli_num_rows($adminloginqueryrun)) {
  ?>
      <script>
        location.replace('dashboard.php');
      </script>
    <?php
    } elseif (mysqli_num_rows($loginqueryrun)) {
    ?>
      <script>
        // Swal.fire({
        //   icon: 'success',
        //   title: 'Successful',
        //   html: '<b>Login Successful</b>,',
        //   showConfirmButton: false,
        //   timer: 1500,
        // });
        const Toast = Swal.mixin({
          toast: true,
          position: 'center',
          showConfirmButton: false,
          timer: 2000,
          background: '#a5dc86',
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Toast.fire({
          icon: 'success',
          iconColor: 'white',
          html: '<b style="color:#fff">Signed in sucessfully</b> <br>'
                
        })
        window.setTimeout(function() {
          window.location.href = 'customerprofile.php';
        }, 2000);
      </script>
    <?php
    } else {
    ?>
      <script>
        Swal.fire({
          icon: 'error',
          title: 'failed',
          html: '<b>Login Failed</b><br>' +
            '<i>Check your Login and Password</i>' +
            '<a href="Register.php" style="text-decoration:none;"><b>Or create New Account</b></a>',
          showConfirmButton: false,
          // timer: 1500,
        });
      </script>
  <?php
      mysqli_error($con);
    }
  }
  ?>
</body>

</html>
</body>

</html>