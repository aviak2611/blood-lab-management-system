<?php
error_reporting(0);
include 'backend/connection.php';
?>
 <?php
    $hospid1=$_GET['hospid'];
    $hosname1=$_GET['hosname'];
    $hosmail1=$_GET['hosmail'];
    $hoscont1=$_GET['hoscont'];
    $hosaddr1=$_GET['hosaddr'];
    $hoscity1=$_GET['hoscity'];
    $hoszip1=$_GET['hoszip'];
    $hosreg1=$_GET['hosreg'];
    $hosdin1=$_GET['hosdin'];
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <title>Document</title>
  <?php
  include 'links.php';
  ?>
</head>

<body>

  <body class="vertical  light  ">
    <div class="wrapper">
      <?php
      include 'header.php';
      ?>
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="col-md-12">
            <div class="card shadow mb-4">
              <div class="card-header">
                <strong class="card-title">Register Your Hospital</strong>
              </div>
              <div class="card-body">
                <form action="updatehospitals.php" method="POST" autocomplete="off" class="needs-validation" novalidate="">
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom3">Hospitals Id</label>
                      <input type="text" class="form-control" id="validationCustom3" name="hospid" value="<?php echo $hospid1?>" required="" readonly>
                      <div class="valid-feedback"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom3">Hospitals Name</label>
                      <input type="text" class="form-control" id="validationCustom3" name="hospname" value="<?php echo $hosname1?>" required="">
                      <div class="valid-feedback"> Looks good! </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-8 mb-3">
                      <label for="exampleInputEmail2">Hospital mail Address</label>
                      <input type="email" class="form-control" name="hospmail" value="<?php echo $hosmail1?>" id="exampleInputEmail2" aria-describedby="emailHelp1" required="">
                      <div class="invalid-feedback"> Please use a valid email </div>
                      <small id="emailHelp1" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="custom-phone">Hospital Contact Number</label>
                      <input class="form-control input-phoneus" name="hospcont" id="custom-phone" value="" required="">
                      <div class="invalid-feedback"> Please enter a correct phone number </div>
                    </div>
                  </div> <!-- /.form-row -->
                  <div class="form-group mb-3">
                    <label for="example-textarea">Hospital Address</label>
                    <textarea class="form-control" id="example-textarea" name="hospaddr" rows="4" required=""><?php echo $hosaddr1?></textarea>
                    <div class="invalid-feedback"> Please enter correct address </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom33">City</label>
                      <input type="text" class="form-control" name="hospcity" value="<?php echo $hoscity1?>" id="validationCustom33" required="">
                      <div class="invalid-feedback"> Please provide a valid city. </div>
                    </div>

                    <div class="col-md-3 mb-3">
                      <label for="validationCustom3">State</label>
                      <input type="text" class="form-control" name="hospstate" id="validationCustom3" value="Maharashtra" required="" readonly>
                    </div>

                    <div class="col-md-3 mb-3">
                      <label for="custom-zip">Zip code</label>
                      <input class="form-control input-zip" value="<?php echo $hoszip1?>" name="hospzip" id="custom-zip" autocomplete="off" maxlength="9" required="">
                      <div class="invalid-feedback"> Please provide a valid zip. </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom3">Hospitals Registration number</label>
                      <input type="text" class="form-control input-reg" name="hospreg" oninput="this.value=this.value.toUpperCase()" id="validationCustom3" value="<?php echo $hosreg1?>" required="">
                      <div class="valid-feedback"> Looks good! </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom3">Hospitals Direct index number</label>
                      <input type="text" class="form-control" name="hospdinum" data-mask="AA-99999" oninput="this.value=this.value.toUpperCase()" id="validationCustom3" value="<?php echo $hosdin1?>" required="">
                      <div class="valid-feedback"> Looks good! </div>
                    </div>
                  </div>
                  <button class="btn btn-primary" type="submit" name="updhosp">Update Hospital Data</button>
                </form>
              </div> <!-- /.card-body -->
            </div> <!-- /.card -->
          </div>
        </div> <!-- .container-fluid -->
      </main> <!-- main -->
    </div>
    <?php
    include 'footer.php'
    ?>
    <!-- update data -->
    <?php
    if (isset($_POST['updhosp'])) {
      $hospid = $_POST['hospid'];
      $hospname = $_POST['hospname'];
      $hospmail = $_POST['hospmail'];
      $hospcont = $_POST['hospcont'];
      $hospaddr = $_POST['hospaddr'];
      $hospcity = $_POST['hospcity'];
      $hospstate = $_POST['hospstate'];
      $hospzip = $_POST['hospzip'];
      $hospreg = $_POST['hospreg'];
      $hospdinum = $_POST['hospdinum'];
        $updatehosp="update hospitalreg set hospitalname='$hospname',hospitalmail='$hospmail',hospitalcont='$hospcont',
        hospitaladdr='$hospaddr',hospitalcity='$hospcity',hospitalstate='$hospstate',hospiralzip='$hospzip',hospitalreg='$hospreg',
        hospitalindex='$hospdinum' WHERE hospitalid='$hospid'";
        $updatehospquery=mysqli_query($con,$updatehosp);
        if($updatehospquery){
            ?>
            <script>
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Hospital Updated Successfully',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    window.setTimeout(function() {
                        window.location.href = 'registerHospitals.php';
                    }, 1500);
                </script>
            <?php
        }else{
            echo mysqli_error($con);
        }
    }
    ?>
  </body>
</body>

</html>