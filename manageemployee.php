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
                <div class="row">
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-3 text-center">
                                        <img src="icons/director.svg" alt="" style="height: 50px;width: 50px;">
                                    </div>
                                    <div class="col pr-0">
                                        <p class="small text-muted mb-0">Lab Director</p>
                                        <?php
                                        $showemps = "select emprole from m_employee where emprole='Laboratory Director'";
                                        $showempsrun = mysqli_query($con, $showemps);
                                        $showempdata = mysqli_num_rows($showempsrun);
                                        ?>
                                        <span class="h3 mb-0"><?php echo $showempdata; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-3 text-center">
                                        <img src="icons/supervisors.svg" alt="" style="height: 50px;width: 50px;">
                                    </div>
                                    <div class="col pr-0">
                                        <p class="small text-muted mb-0">Technical and General Supervisor</p>
                                        <?php
                                        $showemps = "select emprole from m_employee where emprole='Technical and General Supervisors'";
                                        $showempsrun = mysqli_query($con, $showemps);
                                        $showempdata = mysqli_num_rows($showempsrun);
                                        ?>
                                        <span class="h3 mb-0"><?php echo $showempdata; ?></span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-3 text-center">
                                        <img src="icons/scie.svg" alt="" style="height: 50px;width: 50px;">
                                    </div>
                                    <div class="col">
                                        <p class="small text-muted mb-0">Clinical laboratory scientist</p>
                                        <div class="row align-items-center no-gutters">
                                            <div class="col-auto">
                                                <?php
                                                $showemps = "select emprole from m_employee where emprole='Clinical Laboratory Scientist (CLS)'";
                                                $showempsrun = mysqli_query($con, $showemps);
                                                $showempdata = mysqli_num_rows($showempsrun);
                                                ?>
                                                <span class="h3 mr-2 mb-0"><?php echo $showempdata; ?></span>
                                            </div>
                                            <div class="col-md-12 col-lg">
                                                <!-- <div class="progress progress-sm mt-2" style="height:3px">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-3 text-center">
                                        <img src="icons/syringe.svg" alt="" style="height: 50px;width: 50px;">
                                    </div>
                                    <div class="col">
                                        <p class="small text-muted mb-0">Phlebotomist</p>
                                        <?php
                                        $showemps = "select emprole from m_employee where emprole='Phlebotomist (PBT)'";
                                        $showempsrun = mysqli_query($con, $showemps);
                                        $showempdata = mysqli_num_rows($showempsrun);
                                        ?>
                                        <span class="h3 mb-0"><?php echo $showempdata; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <strong class="card-title">Manage Employees</strong>
                            </div>
                            <div class="card-body">
                                <form action="manageemployee.php" method="POST" class="needs-validation" novalidate="" autocomplete="off">
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom3">Employee Id</label>
                                            <input type="text" class="form-control" name="empid" id="validationCustom3" value="<?php echo rand(111, 999); ?>" required="" readonly>
                                            <div class="valid-feedback"> Looks good! </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom3">Employee Name</label>
                                            <input type="text" class="form-control" name="empname" id="validationCustom3" value="" required="">
                                            <div class="valid-feedback"> Looks good! </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-8 mb-3">
                                            <label for="exampleInputEmail2">Employee mail Address</label>
                                            <input type="email" class="form-control" name="empemail" id="exampleInputEmail2" aria-describedby="emailHelp1" required="">
                                            <div class="invalid-feedback"> Please use a valid email </div>
                                            <small id="emailHelp1" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="custom-phone">Employee Contact Number</label>
                                            <input class="form-control input-phoneus" name="empcont" id="custom-phone" data-mask="9999999999" maxlength="10" required="">
                                            <div class="invalid-feedback"> Please enter a correct phone number </div>
                                        </div>
                                    </div> <!-- /.form-row -->
                                    <div class="form-group mb-3">
                                        <label for="example-textarea">Employee Address</label>
                                        <textarea class="form-control" name="empaddr" id="example-textarea" rows="4" required=""></textarea>
                                        <div class="invalid-feedback"> Please enter correct address </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom33">Employee City</label>
                                            <input type="text" class="form-control" name="empcity" id="validationCustomcity" required="">
                                            <div class="invalid-feedback"> Please provide a valid city. </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom3">State</label>
                                            <input type="text" class="form-control" name="empstate" id="validationCustom3" value="Maharashtra" required="" readonly>
                                        </div>
                                        <div class="form-group col-md-3 mb-3">
                                            <label for="example-select">Role</label>
                                            <select class="form-control" id="example-select" name="emprole" required>
                                                <option value=""></option>
                                                <option value="Laboratory Director">Laboratory Director</option>
                                                <option value="Technical and General Supervisors">Technical and General Supervisors</option>
                                                <option value="Clinical Laboratory Scientist (CLS)">Clinical Laboratory Scientist (CLS)</option>
                                                <option value="Phlebotomist (PBT)">Phlebotomist (PBT)</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3 mb-3">
                                            <label for="example-select">Gender</label>
                                            <select class="form-control" id="example-select" required name="empgender">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom3">Employee Joining Date</label>
                                            <input type="text" name="empjoindate" class="form-control input-aadhar" id="validationCustom6" value="<?php echo date('Y-m-d'); ?>" required="">
                                            <div class="invalid-feedback"> Please enter correct aadhar number</div>
                                        </div>
                                        <div class="form-group col-md-6 mb-3">
                                            <label for="example-select">Employement Status</label>
                                            <select class="form-control" id="example-select" required name="empstatus">
                                                <option value="Full time">Full Time</option>
                                                <option value="Part time">Part Time</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" name="addemp" type="submit">Add Employee</button>
                                </form>
                            </div> <!-- /.card-body -->
                        </div> <!-- /.card -->
                    </div>
                    <!-- table -->
                    <div class="row">
                        <div class="col-md-12 my-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title">Manage Employees</h5>
                                    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Employee Id</th>
                                                <th>Employee Name</th>
                                                <th>Employee Mail</th>
                                                <th>Role</th>
                                                <th>Joining Date</th>
                                                <th>Status</th>
                                                <th colspan=2></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $showempstable = "select * from m_employee";
                                            $showempstablerun = mysqli_query($con, $showempstable);
                                            while ($result = mysqli_fetch_array($showempstablerun)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $result['empid']; ?></td>
                                                    <td><?php echo $result['empname']; ?></td>
                                                    <td><?php echo $result['empemail']; ?></td>
                                                    <td><?php echo $result['emprole']; ?></td>
                                                    <td><?php echo $result['empjoindate']; ?></td>
                                                    <?php
                                                    if ($result['empactive'] == 'Active') {
                                                    ?>
                                                        <td><span class="badge badge-pill badge-success">Active</span></td>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <td><span class="badge badge-pill badge-danger">Not Active</span></td>
                                                    <?php
                                                    }
                                                    ?>
                                                    <td class="text-center"><a href="updateemp.php?empid=<?php echo $result['empid']; ?>" style="text-decoration: none;" class="text-success"><i class="fe fe-edit-3 fe-24"></i></a></td>
                                                    <td class="text-center"><a href="backend/deleteemployee.php?empid=<?php echo $result['empid']; ?>" style="text-decoration: none;" class="text-danger" id="deleteemp"><i class="fe fe-trash-2 fe-24"></i></a></td>
                                                    <!-- <td class="text-center"><button class="text-danger" style="border: none;outline: none;background-color: transparent;" id="deleteemp"><i class="fe fe-trash-2 fe-24"></i></button></td> -->
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
                </div> <!-- .container-fluid -->
            </main> <!-- main -->
        </div>
        <?php
        include 'footer.php'
        ?>
        <script>
            $('#validationCustom6').flatpickr({
                altInput: true,
                altFormat: "F j, Y",
                dateFormat: "Y-m-d",
            });
        </script>
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
                $('#validationCustomcity').autocomplete({
                    source: mahcities
                });
            });
        </script>
        <script>
            // $('#deleteemp').click(function() {
            //     Swal.fire({
            //         title: 'Are you sure?',
            //         text: "You won't be able to revert this!",
            //         icon: 'warning',
            //         showCancelButton: true,
            //         confirmButtonColor: '#3085d6',
            //         cancelButtonColor: '#d33',
            //         confirmButtonText: 'Yes, delete it!'
            //     }).then((result) => {
            //         if (result.isConfirmed) {
            //             Swal.fire(
            //                 'Deleted!',
            //                 'Your file has been deleted.',
            //                 'success'
            //             )
            //         }
            //     })
            // });
        </script>
        <!-- insert data -->
        <?php
        include 'backend/connection.php';
        if (isset($_POST['addemp'])) {
            $empid = $_POST['empid'];
            $empname = $_POST['empname'];
            $empemail = $_POST['empemail'];
            $empcont = $_POST['empcont'];
            $empaddr = $_POST['empaddr'];
            $empcity = $_POST['empcity'];
            $empstate = $_POST['empstate'];
            $emprole = $_POST['emprole'];
            $empgender = $_POST['empgender'];
            $empjoindate = $_POST['empjoindate'];
            $empstatus = $_POST['empstatus'];
            $insertemp = "insert into m_employee(empid, empname, empemail, empcont, empaddr, empcity, empstate, emprole, empgender, empjoindate, empstaus) 
        values ('$empid','$empname','$empemail','$empcont','$empaddr','$empcity','$empstate','$emprole','$empgender','$empjoindate','$empstatus')";
            $insertemprun = mysqli_query($con, $insertemp);
            if ($insertemprun) {
        ?>
                <script>
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        html: '<?php echo $emprole; ?> Added Successfully',
                        showConfirmButton: false,
                        timer: 1000
                    });
                    window.setTimeout(function() {
                        window.location.href = 'manageemployee.php';
                    }, 1000);
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