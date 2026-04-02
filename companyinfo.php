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
                <strong class="card-title">Lab Info</strong>
              </div>
              <?php
              include 'backend/connection.php';
              $showlabinfo="select * from labinfo";
              $showlabinforesult=mysqli_query($con,$showlabinfo);
              while($showlabinforesultfetch=mysqli_fetch_array($showlabinforesult)){
              ?>
              <div class="card-body">
                <form action="backend/updatelab.php" method="POST" autocomplete="off" class="needs-validation"  novalidate="">
                  <div class="form-row">
                    <div class="col-md-12 mb-3">
                      <label for="validationCustom3">Lab Name</label>
                      <input type="text" class="form-control" name="labname" id="validationCustom3" value="<?php echo $showlabinforesultfetch[1]?>" required="">
                      <div class="valid-feedback"> Looks good! </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="exampleInputEmail2">Lab mail Address</label>
                      <input type="email" class="form-control" name="labmail" id="exampleInputEmail2" aria-describedby="emailHelp1" required="" value="<?php echo $showlabinforesultfetch[2]?>">
                      <div class="invalid-feedback"> Please use a valid email </div>
                      <small id="emailHelp1" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="custom-phone">Lab Contact Number</label>
                      <input class="form-control input-phoneus" name="labcont" id="custom-phone" maxlength="10" required="" value="<?php echo $showlabinforesultfetch[3]?>">
                      <div class="invalid-feedback"> Please enter a correct phone number </div>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="custom-phone">Alternate Contact Number</label>
                      <input class="form-control input-phoneus" name="altcont" id="custom-phone" maxlength="10" required="" value="<?php echo $showlabinforesultfetch[4]?>">
                      <div class="invalid-feedback"> Please enter a correct phone number </div>
                    </div>
                  </div> <!-- /.form-row -->
                  <div class="form-group mb-3">
                    <label for="example-textarea">Lab Address</label>
                    <textarea class="form-control" name="labaddr" id="example-textarea" rows="4" required=""><?php echo $showlabinforesultfetch[5]?></textarea>
                    <div class="invalid-feedback"> Please enter correct address </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom33">City</label>
                      <input type="text" class="form-control" name="labcity" id="validationCustom33" required="" value="<?php echo $showlabinforesultfetch[6]?>">
                      <div class="invalid-feedback"> Please provide a valid city. </div>
                    </div>
                    
                    <div class="col-md-3 mb-3">
                      <label for="validationCustom3">State</label>
                      <input type="text" class="form-control" name="state" id="validationCustom3" value="Maharashtra" required="" readonly>
                    </div>
            
                    <div class="col-md-3 mb-3">
                      <label for="custom-zip">Zip code</label>
                      <input class="form-control input-zip" name="zipcode" id="custom-zip" autocomplete="off" maxlength="9" required="" value="<?php echo $showlabinforesultfetch[7]?>">
                      <div class="invalid-feedback"> Please provide a valid zip. </div>
                    </div>
                  </div>
                  <div class="form-row">
                  <div class="col-md-3 mb-3">
                      <label for="validationCustom3">Registration Number</label>
                      <input type="text" class="form-control input-regnumber" name="labreg" id="validationCustom3" value="<?php echo $showlabinforesultfetch[8]?>" required="" oninput="this.value=this.value.toUpperCase()">
                      <div class="invalid-feedback"> Please provide a valid Registration Number. </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom3">Certificate Number</label>
                      <input type="text" class="form-control input-certnumber" name="labcert" id="validationCustom3" oninput="this.value=this.value.toUpperCase()" value="<?php echo $showlabinforesultfetch[9]?>" required="">
                      <div class="invalid-feedback"> Please provide a valid Certificate Number. </div>
                    </div>
                    <div class="form-group col-md-3 mb-3">
                        <label for="example-month">Month</label>
                        <input class="form-control" id="example-month" value="<?php echo $showlabinforesultfetch[10]?>" type="month" name="certexp" min="<?php echo date('Y-m') ?>">
                    </div>
                  </div>
                  <input class="btn btn-primary" type="submit" name="updatelab" value="Update Information">
                </form>
              </div> <!-- /.card-body -->
              <?php
              }
              ?>
            </div> <!-- /.card -->
          </div>
        </div> <!-- .container-fluid -->
      </main> <!-- main -->
</div>
<?php 
include 'footer.php'
?>
</body>
</body>
</html>