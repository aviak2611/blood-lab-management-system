<?php
include 'backend/connection.php';
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
                <form action="registerHospitals.php" method="POST" autocomplete="off" class="needs-validation" novalidate="">
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom3">Hospitals Id</label>
                      <input type="text" class="form-control" id="validationCustom3" name="hospid" value="<?php echo rand(3999, 9999) ?>" required="" readonly>
                      <div class="valid-feedback"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom3">Hospitals Name</label>
                      <input type="text" class="form-control" id="validationCustom3" name="hospname" value="" required="">
                      <div class="valid-feedback"> Looks good! </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-8 mb-3">
                      <label for="exampleInputEmail2">Hospital mail Address</label>
                      <input type="email" class="form-control" name="hospmail" id="exampleInputEmail2" aria-describedby="emailHelp1" required="">
                      <div class="invalid-feedback"> Please use a valid email </div>
                      <small id="emailHelp1" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="custom-phone">Hospital Contact Number</label>
                      <input class="form-control input-phoneus" name="hospcont" value="+91" id="custom-phone" maxlength="15" required="">
                      <div class="invalid-feedback"> Please enter a correct phone number </div>
                    </div>
                  </div> <!-- /.form-row -->
                  <div class="form-group mb-3">
                    <label for="example-textarea">Hospital Address</label>
                    <textarea class="form-control" id="example-textarea" name="hospaddr" rows="4" required=""></textarea>
                    <div class="invalid-feedback"> Please enter correct address </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom33">City</label>
                      <input type="text" class="form-control" name="hospcity" id="validationCustom33" required="">
                      <div class="invalid-feedback"> Please provide a valid city. </div>
                    </div>

                    <div class="col-md-3 mb-3">
                      <label for="validationCustom3">State</label>
                      <input type="text" class="form-control" name="hospstate" id="validationCustom3" value="Maharashtra" required="" readonly>
                    </div>

                    <div class="col-md-3 mb-3">
                      <label for="custom-zip">Zip code</label>
                      <input class="form-control input-zip" name="hospzip" id="custom-zip" autocomplete="off" maxlength="9" required="">
                      <div class="invalid-feedback"> Please provide a valid zip. </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom3">Hospitals Registration number</label>
                      <input type="text" class="form-control input-reg" name="hospreg" oninput="this.value=this.value.toUpperCase()" id="validationCustom3" value="" required="">
                      <div class="valid-feedback"> Looks good! </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom3">Hospitals Direct index number</label>
                      <input type="text" class="form-control" name="hospdinum" data-mask="AA-99999" oninput="this.value=this.value.toUpperCase()" id="validationCustom3" value="" required="">
                      <div class="valid-feedback"> Looks good! </div>
                    </div>
                  </div>
                  <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customControlValidation16" required="">
                    <label class="custom-control-label" for="customControlValidation16"> Agree to terms and conditions</label>
                    <div class="invalid-feedback"> You must agree before submitting. </div>
                  </div>
                  <button class="btn btn-primary" type="submit" name="addhosp">Register</button>
                </form>
              </div> <!-- /.card-body -->
            </div> <!-- /.card -->
          </div>
        </div> <!-- .container-fluid -->
        <div class="row justify-content-center container-fluid mx-auto">
          <div class="col-md-12 my-4">
            <div class="card shadow">
              <div class="card-body collapsible1">
                <h5 class="card-title">Registerd Hospital</h5>
                <p class="card-text"></p>
                <!-- <form class="form-inline mr-auto searchform text-muted mb-2">
                                    <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" id="myInput1" onkeyup="myFunction1()" type="search" placeholder="search Users" aria-label="Search">
                                </form> -->
                <table class="table table-bordered table-hover mb-0 text-center" id="myTable1">
                  <thead class="">
                    <tr>
                      <th>Hospital Registration Number</th>
                      <th>Hospitals Direct index number</th>
                      <th>Hospital Name</th>
                      <th>Hospital Mail</th>
                      <th>Hospital Address</th>
                      <th>Hospital contact Number</th>
                      <th colspan="2">Operations</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $showhosps = "select * from hospitalreg";
                    $showhospsquery = mysqli_query($con, $showhosps);
                    while ($showhospsqueryfetch = mysqli_fetch_array($showhospsquery)) {
                    ?>
                      <tr class="">
                        <td><?php echo $showhospsqueryfetch['hospitalreg']; ?></td>
                        <td><?php echo $showhospsqueryfetch['hospitalindex']; ?></td>
                        <td><?php echo $showhospsqueryfetch['hospitalname']; ?></td>
                        <td><?php echo $showhospsqueryfetch['hospitalmail']; ?></td>
                        <td><?php echo $showhospsqueryfetch['hospitaladdr']; ?></td>
                        <td><?php echo $showhospsqueryfetch['hospitalcont']; ?></td>
                        <td class="text-center"><a href="updatehospitals.php?hospid=<?php echo $showhospsqueryfetch['hospitalid'];?>&hosname=<?php echo $showhospsqueryfetch['hospitalname']; ?>&hosmail=<?php echo $showhospsqueryfetch['hospitalmail']; ?>&hoscont=<?php echo $showhospsqueryfetch['hospitalcont']; ?>&hosaddr=<?php echo $showhospsqueryfetch['hospitaladdr']; ?>&hoscity=<?php echo $showhospsqueryfetch['hospitalcity']; ?>&hoszip=<?php echo $showhospsqueryfetch['hospiralzip']; ?>&hosreg=<?php echo $showhospsqueryfetch['hospitalreg']; ?>&hosdin=<?php echo $showhospsqueryfetch['hospitalindex']; ?>" style="text-decoration: none;" class="text-success"><i class="fe fe-edit-3 fe-24"></i></a></td>
                        <td class="text-center"><a href="backend/deletehospital.php?hospid=<?php echo $showhospsqueryfetch['hospitalid']; ?>&hosreg=<?php echo $showhospsqueryfetch['hospitalreg']; ?>&hosdin=<?php echo $showhospsqueryfetch['hospitalindex']; ?>&hosname=<?php echo $showhospsqueryfetch['hospitalname']; ?>&hosmail=<?php echo $showhospsqueryfetch['hospitalmail']; ?>&hosaddr=<?php echo $showhospsqueryfetch['hospitaladdr']; ?>&hoscont=<?php echo $showhospsqueryfetch['hospitalcont']; ?>" style="text-decoration: none;" class="text-danger"><i class="fe fe-trash-2 fe-24"></i></a></td>
                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </main> <!-- main -->
    </div>
    <?php
    include 'footer.php'
    ?>
    <!-- insert data -->
    <?php
    if (isset($_POST['addhosp'])) {
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
      $hospregquery = "insert into hospitalreg(hospitalid, hospitalname, hospitalmail, hospitalcont ,hospitaladdr, hospitalcity, hospitalstate, hospiralzip, hospitalreg, hospitalindex) 
            values('$hospid','$hospname','$hospmail','$hospcont','$hospaddr','$hospcity',
            '$hospstate','$hospzip','$hospreg','$hospdinum')";
      $hospregrun = mysqli_query($con, $hospregquery);
      if ($hospregrun) {
    ?>
        <script>
          location.replace('registerHospitals.php')
        </script>
    <?php
      } else {
        echo mysqli_error($con);
      }
    }
    ?>
  </body>
</body>

</html>