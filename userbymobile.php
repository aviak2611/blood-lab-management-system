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
    include 'links.php';
    ?>
</head>

<body class="vertical  light  ">
    <div class="wrapper">
        <?php
        include 'header.php';
        include 'backend/connection.php';
        $usermail = $_SESSION['getmail'];
        ?>
        <?php
        include 'footer.php';
        ?>
        <main role="main" class="main-content">
            <div class="container-fluid">
                    <h2 class="page-title">Book Test</h2>
                    <!-- <p class="text-muted">Demo for form control styles, layout options, and custom components for creating a wide variety of forms.</p> -->
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <strong class="card-title">Book Your Test Now!</strong>
                        </div>
                        <div class="card-body">
                            <form action="userbymobile.php" method="POST">
                                <?php
                                $serchusers=$_SESSION['searchmob'];
                                $showuserdata="select * from booktest where bookmob='$serchusers' Limit 1";
                                $showuserdatarun=mysqli_query($con,$showuserdata);
                                while($row=mysqli_fetch_array($showuserdatarun)){
                                ?>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Full Name</label>
                                        <input type="text" class="form-control" name="bookname" id="inputEmail4" placeholder="" value="<?php echo $row[2]?>" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">Email</label>
                                        <input type="email" class="form-control" name="bookmail" id="" placeholder="" value="<?php echo $row[3]?>" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">Mobile Number</label>
                                        <input type="text" class="form-control" name="bookmob" id="inputPassword4" placeholder="" data-mask="9999999999" value="<?php echo $row[4]?>" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="example-textarea">Address</label>
                                        <textarea class="form-control" name="bookaddr" id="example-textarea" rows="4" value="" required><?php echo $row[5]?></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                <div class="form-group col-md-2">
                                        <label for="inputEmail4">Gender</label>
                                        <input type="text" class="form-control" name="bookgender" id="inputEmail4" placeholder="" value="<?php echo $row[6]?>" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputCity">City</label>
                                        <input type="text" class="form-control" name="bookcity" id="inputCity" value="<?php echo $row[7]?>" required>
                                    </div>
                                    <div class=" form-group col-md-4">
                                        <label for="validationCustom3">Date</label>
                                        <input type="text" name="bookdate" class="form-control" id="validationCustom6" value="<?php echo date('Y-m-d'); ?>" required="">
                                    </div>
                                    <!-- <div class="form-group col-md-2">
                                        <label for="inputZip">Zip</label>
                                        <input type="text" class="form-control" name="bookzip" id="inputZip" data-mask="999 999" value="<?php echo $row[9]?>" required>
                                    </div> -->
                                </div>
                                <?php
                                }
                                ?>
                                <div class="form-row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="example-select">Test</label>
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
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputZip">Price</label>
                                        <input type="text" class="form-control" name="" id="testprices"  required>
                                    </div>
                                </div>
                                <!-- form-group -->
                                <!-- <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck"> Check me out </label>
                                    </div>
                                </div> -->
                                <button type="submit" class="btn btn-primary" name="booktestbtn">Book</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- .container-fluid -->
        </main> <!-- main -->
    </div> <!-- .wrapper -->
    <?php
    include 'footer.php';
    ?>
    <script>
        $('#validationCustom6').flatpickr({
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
        });
    </script>
    <script>
        $('.select2-multi').select2({
            multiple: true,
            theme: 'bootstrap4',
        });
    </script>
    <script>
        // function validation(e) {
        //     var fname = document.getElementById("validationCustom1").value;
        //     var lname = document.getElementById("validationCustom2").value;
        //     var getmails = document.getElementById("validationCustom3").value;
        //     var mobs = document.getElementById("validationCustom4").value;
        //     if (fname == "" || lname == "" || getmails == "" || mobs == "") {
        //         e.preventDefault();
        //         Swal.fire({
        //             icon: 'error',
        //             title: 'Oops...',
        //             html: '<b style="font-family:sans-serif;">Please Fill All The Fields!</b>',
        //             showConfirmButton: false,
        //             timer: 1000
        //         });
        //     }
        // }
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
            $('#inputCity').autocomplete({
                source: mahcities
            });
        });
    </script>
    <?php
    if (isset($_POST['booktestbtn'])) {
        $bookid = rand(11111, 99999);
        $bookname = $_POST['bookname'];
        $bookmail = $_POST['bookmail'];
        $bookmob = $_POST['bookmob'];
        $bookaddr = $_POST['bookaddr'];
        $bookgender = $_POST['bookgender'];
        $bookcity = $_POST['bookcity'];
        $bookdate = $_POST['bookdate'];
        // $bookzip = $_POST['bookzip'];
        $testnamess = $_POST['testnamess'];
        $bookby = "admin";
        $_SESSION['bookname'] = $bookname;
        $_SESSION['bookaddr'] = $bookaddr;
        $_SESSION['bookmob'] = $bookmob;
        $_SESSION['booktestname'] = $testnamess;
        $insertbookquery = "insert into booktest(bookid, bookname, bookemail, bookmob, bookaddr, bookgender, bookcity, bookdate,  booktestname, bookby) 
        VALUES ('$bookid','$bookname','$bookmail','$bookmob','$bookaddr','$bookgender','$bookcity','$bookdate','$testnamess','$bookby')";
        $insertbookqueryrun = mysqli_query($con, $insertbookquery);
        if ($insertbookqueryrun) {
    ?>
            <script>
                // alert('insert success');
                location.replace('page-invoice.php');
            </script>
    <?php
        } else {
            echo mysqli_error($con);
        }
    }

    ?>
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
                        $("#testprices").val(data);
                    }
                });
            });

        });
    </script>
</body>

</html>