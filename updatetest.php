<?php error_reporting(0); ?>
<?php
include 'backend/connection.php';
$testid = $_GET['testid'];
$testname = $_GET['testname'];
$testprice = $_GET['testprice'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include 'links.php';
    ?>
</head>
<style>
</style>

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
                                <strong class="card-title">Upadte Blood Test</strong>
                            </div>
                            <div class="card-body mt-auto">
                                <form action="updatetest.php" method="POST" autocomplete="off" class="needs-validation" novalidate="">
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom3">Blood Test Id</label>
                                            <input type="text" name="testid" class="form-control bg-light" id="validationCustom3" value="<?php echo $testid ?>" required="" readonly>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom3">Blood Test Name</label>
                                            <input type="text" name="testname" class="form-control" id="validationCustom3" value="<?php echo $testname ?>" required="">
                                            <div class="invalid-feedback"> Please Enter Test Name </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom3">Blood Test Price</label>
                                            <input type="number" name="testprice" class="form-control input-addtest" id="validationCustom3" value="<?php echo $testprice ?>" required="">
                                            <div class="invalid-feedback"> Please Enter Test price </div>
                                        </div>
                                    </div>
                                    <button type="submit" name="updatetest" class="btn mb-2 btn-success text-light">Update<span class="fe fe-chevron-right fe-16 ml-2"></span></button>
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
        <!-- Update data -->
        <?php
        if (isset($_POST['updatetest'])) {
            $testid1 = $_POST['testid'];
            $testname1 = $_POST['testname'];
            $testprice1 = $_POST['testprice'];
            $updatetest = "update testinfo set testname='$testname1',testprice='$testprice1' where testid='$testid1'";
            $updatetestrun = mysqli_query($con, $updatetest);
            if ($updatetestrun) {
        ?>
                <script>
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'lab Test Updated Successfully',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    window.setTimeout(function() {
                        window.location.href = 'addtests.php';
                    }, 1500);
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