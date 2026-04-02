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
<style>
    .collapsible1 {
        height: 500px;
        overflow-y: scroll;
    }
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
                                <strong class="card-title">Add New Blood Test</strong>
                            </div>
                            <div class="card-body">
                                <form action="addtests.php" method="POST" autocomplete="off" class="needs-validation" novalidate="">
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom3">Blood Test Id</label>
                                            <input type="text" name="testid" class="form-control bg-light" id="validationCustom3" value="<?php echo rand(3200, 7500) ?>" required="" readonly>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom3">Blood Test Name</label>
                                            <input type="text" name="testname" class="form-control" id="validationCustom3" value="" required="">
                                            <div class="invalid-feedback"> Please Enter Test Name </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom3">Blood Test Price</label>
                                            <input type="number" name="testprice" class="form-control input-addtest" id="validationCustom3" value="" required="">
                                            <div class="invalid-feedback"> Please Enter Test price </div>
                                        </div>
                                    </div>
                                    <button type="submit" name="adddtest" class="btn mb-2 btn-primary text-muted">Add<span class="fe fe-chevron-right fe-16 ml-2"></span></button>
                                </form>
                            </div> <!-- /.card-body -->
                        </div> <!-- /.card -->
                    </div>
                </div> <!-- .container-fluid -->
                <div class="row justify-content-center container-fluid mx-auto">
                    <div class="col-md-12 my-4">
                        <div class="card shadow">
                            <div class="card-body collapsible1">
                                <h5 class="card-title">All Tests</h5>
                                <p class="card-text"></p>
                                <form class="form-inline mr-auto searchform text-muted mb-2">
                                    <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" id="myInput1" onkeyup="myFunction1()" type="search" placeholder="search" aria-label="Search">
                                </form>
                                <table class="table table-bordered table-hover mb-0  text-center" id="myTable1">
                                    <thead class="">
                                        <tr>
                                            <th>Test ID</th>
                                            <th>Blood TestName</th>
                                            <th>Price</th>
                                            <th colspan="2" class="text-center">Operations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $showtest = "select * from testinfo";
                                        $showtestquery = mysqli_query($con, $showtest);
                                        while ($showtestfetch = mysqli_fetch_array($showtestquery)) {
                                        ?>
                                            <tr class="">
                                                <td><?php echo $showtestfetch[0]; ?></td>
                                                <td><?php echo $showtestfetch[1]; ?></td>
                                                <td><span>₹</span><?php echo $showtestfetch[2]; ?></td>
                                                <td class="text-center"><a href="updatetest.php?testid=<?php echo $showtestfetch[0]; ?>&testname=<?php echo $showtestfetch[1] ?>&testprice=<?php echo $showtestfetch[2]; ?>" style="text-decoration: none;" class="text-success"><i class="fe fe-edit-3 fe-24"></i></a></td>
                                                <td class="text-center"><a href="backend/deletetests.php?testid=<?php echo $showtestfetch[0]; ?>&testname=<?php echo $showtestfetch[1] ?>&testprice=<?php echo $showtestfetch[2]; ?>" style="text-decoration: none;" class="text-danger"><i class="fe fe-trash-2 fe-24"></i></a></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

            </main> <!-- main -->

        </div>
        <?php
        include 'footer.php'
        ?>
        <script>

        </script>
        <!-- insert data -->
        <?php
        if (isset($_POST['adddtest'])) {
            $testid = $_POST['testid'];
            $testname = $_POST['testname'];
            $testprice = $_POST['testprice'];
            $inserttests = "insert into testinfo(testid, testname, testprice) values('$testid','$testname','$testprice')";
            $inserttestsquery = mysqli_query($con, $inserttests);
            if ($inserttestsquery) {
        ?>
                <script>
                    location.replace('addtests.php')
                </script>
        <?php
            } else {
                echo mysqli_error($con);
            }
        }
        ?>
    </body>
    <script>
        // $(document).ready(function() {
        //     $('#myTable1').DataTable({});
        // });
    </script>
</body>

</html>