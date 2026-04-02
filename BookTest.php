<?php
include 'backend/connection.php';
session_start();
$usermail = $_SESSION['getmail'];
if (!isset($_SESSION['getmail'])) {
    header('location:index2.php');
}

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
    <?php
    include 'customerlinks.php';
    ?>
    <script src="js/sweetalert2.all.min.js"></script>
</head>
<style>
    @media screen and (max-width:500px) {
        .wizard .steps ul {
            display: flex;
            flex-direction: column;
            /* width: 100%; */
        }

        .wizard .steps ul li {
            width: 100%;
            margin: auto;
            flex: 1;
        }
    }
</style>

<body class="vertical  light  ">
    <div class="wrapper">
        <?php
        include 'customerheader.php';
        ?>
        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <h2 class="page-title">Book A Test</h2>
                        <!-- <p>Using jQuery Steps as default wizard plugin. That is an extremely flexible, compact and feature-rich plugin.</p> -->

                        <?php
                        $getcustid = $_SESSION['custid'];
                        date_default_timezone_set("Asia/Calcutta");
                        $newuser = "select * from custdesc where ccid='$getcustid'";
                        $newuserrun = mysqli_query($con, $newuser);
                        if (mysqli_num_rows($newuserrun) == 0) {
                        ?>
                            <script>
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops!',
                                    html: '<b>You Have To Complete Profile First</b>',
                                    showConfirmButton: false,
                                    timer: 2500,
                                });
                                window.setTimeout(function() {
                                    window.location.href = 'customerprofile.php';
                                }, 2500);
                            </script>
                        <?php
                        }
                        ?>
                        <?php
                        $showuser = "select * from custdesc where ccid='$getcustid'";
                        $showuserrun = mysqli_query($con, $showuser);
                        while ($result = mysqli_fetch_array($showuserrun)) {
                        ?>
                            <form action="BookTest.php" method="POST" class="needs-validation was-validated" novalidate autocomplete="off">

                                <div class="card my-4">
                                    <div class="card-header">
                                        <strong></strong>
                                    </div>
                                    <div class="card-body">
                                        <form action="BookTest.php" method="POST" id="bookform">
                                            <div class="clearfix">
                                                <!-- <div class="float-right">
                                                    <button class="btn btn-primary" type="reset" id="resetbtn">Add New</button>
                                                </div> -->
                                            </div>
                                            <div id="example-basic">
                                                <h3><span><img src="icons/personal.svg" alt="" style="height: 25px;"> </span>Personal Information</h3>
                                                <section>
                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationCustom3">First name</label>
                                                            <input type="text" class="form-control required" name="fname" id="validationCustom1" value="<?php echo $result['cfname'] ?>" required="">
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">Hey! it was Looking good. </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationCustom4">Last name</label>
                                                            <input type="text" class="form-control required" name="lname" id="validationCustom2" value="<?php echo $result['clname'] ?>" required="">
                                                            <div class="valid-feedback"> Looks good! </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-3">
                                                            <label for="validationCustom5">Email</label>
                                                            <input type="email" class="form-control required" name="bemail" id="validationCustom3" value="<?php echo $result['cemail'] ?>" required="">
                                                            <div class="invalid-feedback"> Please Enter Valid Email</div>
                                                            <div class="valid-feedback"> We Don't Share your mail with Any others</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationCustom5">Mobile Number</label>
                                                            <input type="text" class="form-control required" name="bmob" id="validationCustom4" data-mask="9999999999" value="<?php echo $result['cmob'] ?>" required="">
                                                            <div class="invalid-feedback"> Please Enter Valid Mobilenumber</div>
                                                            <div class="valid-feedback"> Looks Good!</div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationCustom5">City</label>
                                                            <input type="text" class="form-control required" name="bcity" id="validationCustom5" value="<?php echo $result['ccity'] ?>" required="">
                                                            <div class="invalid-feedback"> Please Enter Your city</div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <h3><span><img src="icons/doctors.svg" alt="" style="height: 25px;"> </span> Doctor's Info</h3>
                                                <section>
                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-3">
                                                            <label for="validationCustom5">Doctor Reference</label>
                                                            <input type="text" class="form-control required" id="validationCustom6" name="bdocrefer" value="SELF" required="">
                                                            <div class="invalid-feedback"> Please Enter Name Of Doctor Who Referred You!</div>
                                                            <div class="valid-feedback"> Please Enter Name Of Doctor Who Referred You!</div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <h3 class="col-md-4"><span><img src="icons/syringe.svg" alt="" style="height: 25px;"> </span>Test Details</h3>
                                                <section>
                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationCustom5">Test Date</label>
                                                            <input type="text" class="form-control required" name="testdate" id="validationCustom7" value="<?php echo date('Y-m-d') ?>" required="">
                                                            <div class="invalid-feedback"> Please Enter Valid Date</div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationCustom5">Test Time</label>
                                                            <input type="time" class="form-control required validationCustom8" name="testtime" id="validationCustom8" min="09:00" max="22:00" onblur="checktimeval()" value="<?php echo date('H:i') ?>" required="">
                                                            <div class="invalid-feedback">Lab is Opened Between 9.00 AM - 10.00 PM</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6 mb-3">
                                                            <label for="example-select">Test name</label>
                                                            <select class="form-control" id="example-select" required="" name="testnamess" required>
                                                                <option value=""></option>
                                                                <?php
                                                                $showtest = "select * from testinfo";
                                                                $showtestquery = mysqli_query($con, $showtest);
                                                                while ($showtestfetch = mysqli_fetch_array($showtestquery)) {
                                                                ?>
                                                                    <option value="<?php echo $showtestfetch[1] ?>"><?php echo $showtestfetch[1] ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                            <div class="invalid-feedback"> Please Choose Test You want to conduct</div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="inputZip">Price</label>
                                                            <input type="text" class="form-control" name="" id="testprices" readonly required>
                                                            <div class="valid-feedback"> 12% GST applicable while Payment</div>
                                                        </div>
                                                    </div>
                                                    <div class="mx-auto text-center">
                                                        <input type="submit" id="booktestbtn" name="booksubmit" value="Book Your Test Now!" class="btn btn-primary text-white w-100" onclick="validation(event)">
                                                    </div>
                                                </section>
                                            </div>
                                        </form>
                                    </div> <!-- .card-body -->
                                </div> <!-- .card -->
                            </form>
                        <?php
                        }

                        ?>
                    </div> <!-- .col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->
        </main> <!-- main -->
    </div> <!-- .wrapper -->
    <?php
    include 'customerfooter.php';
    ?>
    <script>
        $('#validationCustom7').flatpickr({
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
            minDate: "<?php echo date('Y-m-d') ?>",
            allowInput: true
        });
    </script>
    <script>
        $(function() {
            $("#example-select").change(function() {
                // alert($('option:selected', this).text());
                var dropdownvalue = $("#example-select").val();
                $.ajax({
                    type: "POST",
                    url: "gettestprice.php",
                    data: {
                        testname: dropdownvalue
                    },
                    success: function(data) {
                        // console.log(data);
                        // alert(data);
                        // $("#testprices").val(data);
                        // datagst=int(data)+((12/100)*data);
                        getdata = parseInt(data);
                        datagst = getdata + ((12 / 100) * getdata);
                        $("#testprices").val(datagst);
                    }
                });
            });

        });
    </script>
    <script>
        function validation(e) {
            var fname = document.getElementById("validationCustom1").value;
            var lname = document.getElementById("validationCustom2").value;
            var getmails = document.getElementById("validationCustom3").value;
            var mobs = document.getElementById("validationCustom4").value;
            var cities = document.getElementById('validationCustom5').value;
            var docrefer = document.getElementById('validationCustom6').value;
            var testname = document.getElementById('example-select').value;
            if (fname == "" || lname == "" || getmails == "" || mobs == "" || cities == "" || docrefer == "" || testname == "") {
                e.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    html: '<b style="font-family:sans-serif;">Please Fill All The Fields!</b>',
                    showConfirmButton: false,
                    timer: 2500
                });
            }
        }
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
            $('#validationCustom5').autocomplete({
                source: mahcities
            });
        });
    </script>
    <script>
        function checktimeval(){
        var timeval=document.getElementById("theidofurinput").value;
        if(!(timeval > 9 && timeval < 23)){
    // document.getElementById("theidoferrorspan").innerHTML="Please enter time <7 a.m and >6 p.m";
    alert('Wrong time')
        }
}
    </script>
    <?php
    if (isset($_POST['booksubmit'])) {
        $bookid = rand(11111111, 99999999);
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $bemail = $_POST['bemail'];
        $bcity = $_POST['bcity'];
        $bmob = $_POST['bmob'];
        $bdocrefer = $_POST['bdocrefer'];
        $testdate = $_POST['testdate'];
        $testtime = $_POST['testtime'];
        $testnamess = $_POST['testnamess'];
        $sheduletest = "insert into schedultest(bookid, custid, bfname, blname, bemail, bmob, bcity, docrefer, testdate, testtime, testname) 
                VALUES ('$bookid','$getcustid','$fname','$lname','$bemail','$bmob','$bcity','$bdocrefer','$testdate','$testtime','$testnamess')";
        $sheduletestrun = mysqli_query($con, $sheduletest);
        $duplicatetest = "select * from schedultest where bemail='$bemail' and testname='$testnamess'";
        $duplicatetestrun = mysqli_query($con, $duplicatetest);

        if ($sheduletestrun) {

    ?>
            <script>
                // alert('insert successful');
                Swal.fire({
                    icon: 'info',
                    title: 'Your Test is Booked',
                    html: '<b class="text-warning">Please vist us on your <br> Selected <strong class="text-danger">Date</strong> and <strong class="text-danger"> Time</strong></b>',
                    showConfirmButton: false,
                    timer: 5000,
                });
            </script>
    <?php
        } else {
            mysqli_error($con);
        }
    }

    ?>
    <script>
        // $("#resetbtn").click(function() {
        //     $("#bookform").trigger('reset');
        //     // $("#validationCustom1").val("");
        // });
    </script>
</body>

</html>