<?php
include 'backend/connection.php';
error_reporting(0);
?>
<?php
// session_start();
$empid=$_GET['empid'];
echo $empid;
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
                            <?php
                            $showupdatedemp="select * from m_employee where empid='$empid'";
                            $showupdatedemprun=mysqli_query($con,$showupdatedemp);
                            while($row=mysqli_fetch_array($showupdatedemprun)){
                            ?>
                            <div class="card-body">
                                <form action="updateemp.php" method="POST" class="needs-validation" novalidate="" autocomplete="off">
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom3">Employee Id</label>
                                            <input type="text" class="form-control" name="empid" id="validationCustom3" value="<?php echo $row[1];?>" required readonly>
                                            <div class="valid-feedback"> Looks good! </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom3">Employee Name</label>
                                            <input type="text" class="form-control" name="empname" id="validationCustom3" value="<?php echo $row[2];?>" required>
                                            <div class="valid-feedback"> Looks good! </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-8 mb-3">
                                            <label for="exampleInputEmail2">Employee mail Address</label>
                                            <input type="email" class="form-control" name="empemail" id="exampleInputEmail2" aria-describedby="emailHelp1" value="<?php echo $row[3];?>" required>
                                            <div class="invalid-feedback"> Please use a valid email </div>
                                            <small id="emailHelp1" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="custom-phone">Employee Contact Number</label>
                                            <input class="form-control input-phoneus" name="empcont" id="custom-phone" data-mask="9999999999" maxlength="10" required value="<?php echo $row[4];?>">
                                            <div class="invalid-feedback"> Please enter a correct phone number </div>
                                        </div>
                                    </div> <!-- /.form-row -->
                                    <div class="form-group mb-3">
                                        <label for="example-textarea">Employee Address</label>
                                        <textarea class="form-control" name="empaddr" id="example-textarea" rows="4" required><?php echo $row[5];?></textarea>
                                        <div class="invalid-feedback"> Please enter correct address </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom33">Employee City</label>
                                            <input type="text" class="form-control" name="empcity" id="validationCustomcity" required value="<?php echo $row[6];?>">
                                            <div class="invalid-feedback"> Please provide a valid city. </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom3">State</label>
                                            <input type="text" class="form-control" name="empstate" id="validationCustom3" value="Maharashtra" required readonly>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom33">Employee Role</label>
                                            <input type="text" class="form-control" name="emprole" id="roleid" required value="<?php echo $row[8];?>">
                                            <div class="invalid-feedback"> Please provide a valid city. </div>
                                        </div>
                                        <div class="form-group col-md-3 mb-3">
                                            <label for="example-select">Gender</label>
                                            <select class="form-control" id="example-select"  required name="empgender" value="<?php echo $row[9];?>">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom3">Employee Joining Date</label>
                                            <input type="text" name="empjoindate"  class="form-control input-aadhar" id="validationCustom6" value="<?php echo $row['empjoindate'] ?>" required>
                                            <div class="invalid-feedback"> Please enter correct aadhar number</div>
                                        </div>
                                        <div class="form-group col-md-4 mb-3">
                                            <label for="example-select">Employement Work</label>
                                            <select class="form-control" id="example-select"  required name="empstatus">
                                                <option value="Full time">Full Time</option>
                                                <option value="Part time">Part Time</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4 mb-3">
                                            <label for="example-select">Employement Active</label>
                                            <select class="form-control" id="example-select"  required name="empactive" autofocus="autofocus">
                                            <option value=""></option>
                                                <option value="Active">Active</option>
                                                <option value="Not Active">Not Active</option>
                                            </select>
                                        </div>
                                    </div>
                                    <?php
                            }
                                    ?>
                                    <button class="btn btn-primary" name="updemp" type="submit">Update</button>
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
            $(function() {
                var roles = [
                    'Laboratory Director',
                    'Technical and General Supervisors',
                    'Clinical Laboratory Scientist (CLS)',
                    'Phlebotomist (PBT)'
                ];
                $('#roleid').autocomplete({
                    source: roles
                });
            });
        </script>
        <?php
        include 'backend/connection.php';
        if (isset($_POST['updemp'])) {
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
            $empactive=$_POST['empactive'];
            $updateemployee="update m_employee set empname='$empname',empemail='$empemail',empcont='$empcont',
            empaddr='$empaddr',empcity='$empcity',empstate='$empstate',emprole='$emprole',
            empgender='$empgender',empjoindate='$empjoindate',empstaus='$empstatus',empactive='$empactive' 
            WHERE empid='$empid'";
            $updateemployeerun=mysqli_query($con,$updateemployee);
            if($updateemployeerun){
                ?>
            <script>
                location.replace('manageemployee.php');
            </script>
                <?php
            }
            else{
                echo mysqli_error($con);
            }
        }
        ?>
    </body>
</body>

</html>