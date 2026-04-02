<?php
session_start();
include 'backend/connection.php';
if (!isset($_SESSION['getmail'])) {
  header('location:index2.php');
}
$getcustmail = $_SESSION['getmail'];
$showcustsdata = "select * from cust_registration where cust_mail='$getcustmail'";
$showcustsdataquery = mysqli_query($con, $showcustsdata);
while ($result = mysqli_fetch_assoc($showcustsdataquery)) {
  $custids = $result['cust_id'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <title>Profile</title>
  <?php
  include 'customerlinks.php';
  ?>
</head>

<body>

  <body class="vertical  light  ">
    <div class="wrapper">
      <?php
      include 'customerheader.php';
      ?>
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row mt-5 align-items-center">
            <div class="col-md-3 text-center mb-5">
              <?php
              $newusers = "select * from custdesc where ccid='$custids'";
              $newusersrun = mysqli_query($con, $newusers);
              if(mysqli_num_rows($newusersrun)==0){
                  ?>
                  <div class="avatar avatar-xl">
                    <img src="icons/defaultavatar.svg" alt="..." class="avatar-img rounded-circle">
                  </div>
                  <?php
              }
              else{
               while ($rows = mysqli_fetch_array($newusersrun)) {            
                if ($rows['cgender'] == 'Male' || $rows['cgender'] == 'male') {
              ?>
                  <div class="avatar avatar-xl">
                    <img src="icons/useravatar.svg" alt="..." class="avatar-img rounded-circle">
                  </div>
                <?php
                } elseif ($rows['cgender'] == 'Female' || $rows['cgender'] == 'female') {
                ?>
                  <div class="avatar avatar-xl">
                    <img src="icons/useravatarfemale.svg" alt="..." class="avatar-img rounded-circle">
                  </div>
              <?php
                }
                }
              }
              ?>
            </div>
            <div class="col">
              <div class="row align-items-center">

                 <?php
                $showcustdata = "select * from cust_registration where cust_mail='$getcustmail'";
                $showcustdataquery = mysqli_query($con, $showcustdata);
                while ($result = mysqli_fetch_assoc($showcustdataquery)) {
                  $custids = $result['cust_id'];
                  $_SESSION['custid'] = $custids;
                }
                $newuser = "select * from custdesc where ccid='$custids'";
                $newuserrun = mysqli_query($con, $newuser);
                if (mysqli_num_rows($newuserrun) == 0) {
                ?>
                  <div class="col-md-7">
                    <?php
                    $showcustdata = "select * from cust_registration where cust_mail='$getcustmail'";
                    $showcustdataquery = mysqli_query($con, $showcustdata);
                    while ($result = mysqli_fetch_assoc($showcustdataquery)) {
                      $custids = $result['cust_id'];
                      $_SESSION['custid'] = $custids;
                      // echo $custids;
                    ?>
                      <h4 class="mb-1"><?php echo $result['cust_fname'] ?> <?php echo $result['cust_lname'] ?><img src="icons/badge1.svg" alt="" style="height: 25px;"></h4>
                    <?php
                    }
                    ?>
                    <p class="small mb-3"><span class="badge badge-dark">Maharashtra,INDIA</span></p>
                  </div>
                <?php
                } else {
                ?>
                  <div class="col-md-7">
                    <?php
                    $showcustdata = "select * from custdesc where ccid='$custids'";
                    $showcustdataquery = mysqli_query($con, $showcustdata);
                    while ($result = mysqli_fetch_assoc($showcustdataquery)) {
                      $custids = $result['ccid'];
                      // echo $custids;
                    ?>

                      <h4 class="mb-1"><?php echo $result['cfname'] ?> <?php echo $result['clname'] ?><img src="icons/badge1.svg" alt="" style="height: 25px;"></h4>
                    <?php
                    }
                    ?>
                    <p class="small mb-3"><span class="badge badge-dark">Maharashtra,INDIA</span></p>
                  </div>
                <?php
                }
                ?>
              </div>
              <div class="row mb-4">
                <div class="col-md-7">
                  <!-- <span class="badge badge-pill badge-info">Info</span> -->
                </div>
                <!-- <div class="col">
                      <p class="small mb-0 text-muted">Nec Urna Suscipit Ltd</p>
                      <p class="small mb-0 text-muted">P.O. Box 464, 5975 Eget Avenue</p>
                      <p class="small mb-0 text-muted">(537) 315-1481</p>
                    </div> -->
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10 col-xl-8">
            <h2 class="h3 mb-4 page-title"><i class="fe fe-user"></i> Set Up Profile</h2>
            <div class="my-4">
              <?php
              $showcustdesc = "select * from custdesc where ccid='$custids'";
              $showcustdescrun = mysqli_query($con, $showcustdesc);
              if (mysqli_num_rows($showcustdescrun) == 0) {
                $showcustdata = "select * from cust_registration where cust_id='$custids'";
                $showcustdataquery = mysqli_query($con, $showcustdata);
                while ($result = mysqli_fetch_assoc($showcustdataquery)) {
              ?>
                  <form action="customerprofile.php" method="POST" autocomplete="off">
                    <hr class="my-4">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="firstname">Firstname</label>
                        <input type="text" id="firstname" name="cfname" value="<?php echo $result['cust_fname'] ?>" class="form-control" placeholder="" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lastname">Lastname</label>
                        <input type="text" id="lastname" name="clname" value="<?php echo $result['cust_lname'] ?>" class="form-control" placeholder="" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" name="cemail" value="<?php echo $result['cust_mail'] ?>" id="inputEmail4" placeholder="" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="custom-select">Gender</label>
                        <select class="custom-select" id="custom-select" name="cgender" required>
                          <option value=""></option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress5">Address</label>
                      <input type="text" class="form-control" name="caddr" id="inputAddress5" placeholder="" required>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCompany5">Mobile Number</label>
                        <input type="text" class="form-control" name="cmobs" id="inputCompany5" data-mask="9999999999" placeholder="" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputZip5">City</label>
                        <input type="text" class="form-control" name="ccity" id="inputZip5" placeholder="" required>
                      </div>
                    </div>
                    <hr class="my-4">
                    <button type="submit" name="insertchanges" class="btn btn-primary">Make New Profile</button>
                  </form>
                <?php
                }
              } else {
                while ($row = mysqli_fetch_array($showcustdescrun)) {
                ?>
                  <form action="customerprofile.php" method="POST" autocomplete="off">
                    <hr class="my-4">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="firstname">Firstname</label>
                        <input type="text" id="firstname" name="cfname" class="form-control" value="<?php echo $row['cfname']; ?>" placeholder="" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lastname">Lastname</label>
                        <input type="text" id="lastname" name="clname" class="form-control" value="<?php echo $row['clname']; ?>" placeholder="" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" name="cemail" value="<?php echo $row['cemail'] ?>" id="inputEmail4" placeholder="" required>
                      </div>
                      <div class="form-group col-md-6">
                      <label for="lastname">Gender</label>
                        <input type="text" id="cgender" name="cgender" class="form-control" value="<?php echo $row['cgender']; ?>" placeholder="" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress5">Address</label>
                      <input type="text" class="form-control" name="caddr" id="inputAddress5" value="<?php echo $row['caddr']; ?>" placeholder="" required>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCompany5">Mobile Number</label>
                        <input type="text" class="form-control" name="cmobs" id="inputCompany5" value="<?php echo $row['cmob']; ?>" data-mask="9999999999" placeholder="" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputZip5">City</label>
                        <input type="text" class="form-control" name="ccity" value="<?php echo $row['ccity']; ?>" id="inputZip5" placeholder="" required>
                      </div>
                    </div>
                    <hr class="my-4">
                    <button type="submit" name="updatechanges" class="btn btn-primary" autofocus="autofocus" onclick="validation(event)">Update Profile</button>
                  </form>
              <?php
                }
              }
              ?>
            </div> <!-- /.card-body -->
          </div> <!-- /.col-12 -->
        </div>
      </main>
    </div>
    <?php
    include 'customerfooter.php'
    ?>
    <script>
      $(function() {
        var mahcities = [
          'Ahmednagar',
          'Akola',
          'Amravati',
          'Bhandara', //get cities names
          'Beed',
          'Buldhana',
          'Chandrapur',
          'Dharashiv',
          'Dhule',
          'Gadchiroli',
          'Gondia',
          'Hingoli',
          'Jalgaon',
          'Jalna',
          'Kolhapur',
          'Latur',
          'Mumbai City',
          'Mumbai suburban',
          'Nandurbar',
          'Nanded',
          'Nagpur',
          'Nashik',
          'Parbhani',
          'Pune',
          'Raigad',
          'Ratnagiri',
          'Sambhajinagar', //https://gist.github.com/Faizanq/92fadd721b72087c9673d82aa8cdb994
          'Sindhudurg',
          'Sangli',
          'Solapur',
          'Satara',
          'Thane',
          'Wardha',
          'Washim',
          'Yavatmal',
        ];
        $('#inputZip5').autocomplete({
          source: mahcities
        });
      });
    </script>
    <script>
      $(function() {
        var cgender = [
          'Male',                             //check if gender is correct
          'Female'
        ];
        $('#cgender').autocomplete({
          source: cgender
        });
      });
    </script>
    <script>
        function validation(e) {
          var getgender=document.getElementById('cgender').value;
          if(getgender!=="Male" && getgender!=="Female" && getgender!=="male" && getgender!=="female"){
            e.preventDefault();
            Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    html: '<b style="font-family:sans-serif;">Please Enter Valid Gender</b><br>'+
                          '<small>Please Take input from autocomplete</small>',
                    showConfirmButton: false,
                    timer: 3000
            });
          }
        }

    </script>
    <?php
    if (isset($_POST['insertchanges'])) {
      $custidss = $custids;
      $cfname = $_POST['cfname'];
      $clname = $_POST['clname'];
      $cemail = $_POST['cemail'];
      $caddr = $_POST['caddr'];
      $cgender = $_POST['cgender'];
      $cmobs = $_POST['cmobs'];
      $ccity = $_POST['ccity'];
      $insertcustdesc = "insert into custdesc(ccid, cfname, clname, cemail, caddr,cgender, cmob, ccity) 
      values ('$custidss','$cfname','$clname','$cemail','$caddr','$cgender','$cmobs','$ccity')";
      $insertcustdescrun = mysqli_query($con, $insertcustdesc);
      if ($insertcustdescrun) {
    ?>
        <script>
          const Toast = Swal.mixin({
            toast: true,
            position: 'center',
            showConfirmButton: false,
            timer: 1000,
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
            html: '<b>New Profile Created</b>'
          })
          window.setTimeout(function() {
            window.location.href = 'customerprofile.php';
          }, 1000);
        </script>
    <?php
      } else {
        echo mysqli_error($con);
      }
    }
    ?>
    <?php
    if (isset($_POST['updatechanges'])) {
      $custidss = $custids;
      $cfname = $_POST['cfname'];
      $clname = $_POST['clname'];
      $cemail = $_POST['cemail'];
      $caddr = $_POST['caddr'];
      $cgender = $_POST['cgender'];
      $cmobs = $_POST['cmobs'];
      $ccity = $_POST['ccity'];
      $updatecustdesc = "update custdesc set cfname='$cfname',
    clname='$clname',cemail='$cemail',caddr='$caddr',cgender='$cgender',cmob='$cmobs',ccity='$ccity' where ccid='$custidss'";
      $updatecustdescrun = mysqli_query($con, $updatecustdesc);
      if ($updatecustdescrun) {
    ?>
        <script>
          // // alert("Update Successful");
          const Toast = Swal.mixin({
            toast: true,
            position: 'center',
            showConfirmButton: false,
            timer: 1000,
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
            html: '<b>Profile Updated Successfully</b>'
          })
          window.setTimeout(function() {
            window.location.href = 'customerprofile.php';
          }, 1000);
        </script>
    <?php
      } else {
        echo mysqli_error($con);
      }
    }
    ?>
  </body>

</html>