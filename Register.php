<?php
include 'backend/connection.php';
$query = "select MAX(table_id) from cust_registration";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
$ids = $row[0] + 1;
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
  body{
    overflow: hidden;
  }
</style>

<body class="light ">
  <div class="wrapper vh-100">
    <div class="row align-items-center h-100">
      <form action="Register.php" method="POST" class="col-lg-6 col-md-8 col-10 mx-auto">
        <div class="mx-auto text-center my-4">
          <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="">
            <img src="icons/modernlab.png" alt="" style="height: 225px;margin-bottom: -30px;">
          </a>
          <h2 class="my-3">Register</h2>
        </div>
        <div class="form-group">
          <label for="inputEmail4">Email</label>
          <input type="email" name="custmail" class="form-control" id="inputEmail4" required>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="firstname">Firstname</label>
            <input type="text" name="custfname" id="firstname" class="form-control" required>
          </div>
          <div class="form-group col-md-6">
            <label for="lastname">Lastname</label>
            <input type="text" name="custlname" id="lastname" class="form-control" required>
          </div>
        </div>
        <hr class="my-4">
        <div class="row mb-4">
          <div class="col-md-6">
            <div class="form-group">
              <label for="inputPassword5">New Password</label>
              <input type="text" name="custpass" class="form-control" id="inputPassword5" required>
            </div>
            <!-- <div class="form-group">
              <label for="inputPassword6">Confirm Password</label>
              <input type="password" name="custconpass" class="form-control" id="inputPassword6" required readonly style="background-color: #343a40;">
            </div> -->
          </div>
          <div class="col-md-6">
            <p class="mb-2">Password requirements</p>
            <p class="small text-muted mb-2"> To create a new password, you have to meet all of the following requirements: </p>
            <ul class="small text-muted pl-4 mb-0">
              <li> Minimum 8 character </li>
              <li>At least one special character</li>
              <li>At least one number</li>
              <li>Can’t be the same as a previous password </li>
            </ul>
          </div>
        </div>
        <input type="submit" class="btn btn-lg btn-primary btn-block" name="custreg" value="Sign Up">
        <p class="mt-5 mb-3 text-muted text-center">© 2024.modernlab.com</p>
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
  <script>
    $(document).ready(function() {
      $('#inputPassword5').keyup(function() {
        $('#inputPassword6').val(this.value);
      });
    });
  </script>
  <!-- insert data -->
  
<?php
  include 'backend/connection.php';
  if (isset($_POST['custreg'])) {
    $table_id=$ids;
    $custid = rand(10000, 99999);
    $custmail = $_POST['custmail'];
    $custfname = $_POST['custfname'];
    $custlname = $_POST['custlname'];
    $custpass = $_POST['custpass'];
    $custpassmd5=md5($custpass);
    $checkuser = "select cust_mail from cust_registration where cust_mail='$custmail'";
    $checkuserquery = mysqli_query($con, $checkuser);
    $regcust = "insert into cust_registration(table_id,cust_id, cust_mail, cust_fname, cust_lname, cust_pass) values('$table_id','$custid','$custmail','$custfname','$custlname','$custpassmd5')";
    $regcustquery = mysqli_query($con, $regcust);
    //check user
    if (mysqli_num_rows($checkuserquery)) {
    $deleteuser="delete from cust_registration WHERE table_id=(SELECT MAX(table_id) FROM cust_registration)";
    $deleteuserquery=mysqli_query($con,$deleteuser);
  ?>
      <script>
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Account Already Existed',
          showConfirmButton:false,
          timer:1500,
        });
      </script>
    <?php
    } 
    elseif($regcustquery) {
    ?>
      <script>
        Swal.fire({
          icon: 'success',
          title: 'Congratulations',
          html: '<b>Now Log In with your current LogIn and Passsword</b>,',
          showConfirmButton:false,
          timer:1500,
        });
        window.setTimeout(function() {
          window.location.href ='index2.php';
        }, 1500);
      </script>
  <?php
    } else {
      echo mysqli_error($con);
    }
  }
  ?>
</body>
</html>
</body>
</html>