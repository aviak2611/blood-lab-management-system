<?php
// $sql = "SELECT custdesc.cfname,custdesc.clname,custdesc.cemail,custdesc.caddr,custdesc.cgender,custdesc.ccity,schedultest.testname,schedultest.bookid FROM schedultest INNER JOIN custdesc ON custdesc.ccid=schedultest.custid;";
$bookingid=$_GET['bookid'];
// echo $bookingid;
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
    include 'links.php';
    ?>
    <script src="js/sweetalert2.all.min.js"></script>
</head>

<body class="vertical  light  ">
    <div class="wrapper">
        <?php
        include 'header.php';
        include 'backend/connection.php';
        $usermail = $_SESSION['getmail'];
        ?>
        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="col-12">
                    <h2 class="page-title"><span><img src="icons/book.svg" alt="" style="height: 40px;"> </span>Book Test</h2>
                    <!-- <p class="text-muted">Demo for form control styles, layout options, and custom components for creating a wide variety of forms.</p> -->
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <strong class="card-title">Book Your Test Now!</strong>
                        </div>
                        
                        <div class="card-body">
                            <form action="scheduledtest.php" method="POST">
                                <?php
                                $showdata="select custdesc.cfname,custdesc.clname,custdesc.cemail,custdesc.cmob,custdesc.caddr,custdesc.cgender,custdesc.ccity,schedultest.testdate,schedultest.testname,schedultest.bookid FROM schedultest INNER JOIN custdesc ON custdesc.ccid=schedultest.custid where schedultest.bookid='$bookingid'";
                                $showdatarun=mysqli_query($con,$showdata);
                                while($rows=mysqli_fetch_array($showdatarun)){
                                ?>
                                <div class="form-row">
                                <div class="form-group col-md-4">
                                        <label for="inputEmail4">ID</label>
                                        <input type="text" class="form-control" name="bookids" id="inputEmail4" placeholder="" required value="<?php echo $rows['bookid']?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Full Name</label>
                                        <input type="text" class="form-control" name="bookname" id="inputEmail4" placeholder="" required value="<?php echo $rows['cfname']." ".$rows['clname']?>">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">Email</label>
                                        <input type="email" class="form-control" name="bookmail" id="inputPassword4" placeholder="" required value="<?php echo $rows['cemail']?>">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">Mobile Number</label>
                                        <input type="text" class="form-control" name="bookmob" id="inputPassword4" placeholder="" data-mask="9999999999" required value="<?php echo $rows['cmob']?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="example-textarea">Address</label>
                                        <textarea class="form-control" name="bookaddr" id="example-textarea" rows="4" required><?php echo $rows['caddr']?></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-2 form-inline">

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" value="male" name="bookgender" class="custom-control-input" required checked>
                                            <label class="custom-control-label" for="customRadio1">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio ml-2">
                                            <input type="radio" id="customRadio2" value="female" name="bookgender" class="custom-control-input" required>
                                            <label class="custom-control-label" for="customRadio2">Female</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputCity">City</label>
                                        <input type="text" class="form-control" name="bookcity" id="inputCity" required value="<?php echo $rows['ccity']?>">
                                    </div>
                                    <div class=" form-group col-md-6">
                                        <label for="validationCustom3">Date</label>
                                        <input type="text" name="bookdate" class="form-control" id="validationCustom6" value="<?php echo date('Y-m-d')?>" required="">
                                    </div>
                                    <!-- <div class="form-group col-md-2">
                                        <label for="inputZip">Zip</label>
                                        <input type="text" class="form-control" name="bookzip" id="inputZip" data-mask="999 999" required>
                                    </div> -->
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4 mb-3">
                                        <label for="inputEmail4">Test Name</label>
                                        <input type="text" class="form-control" name="testnamess" id="inputEmail4" placeholder="" required value="<?php echo $rows['testname']?>">
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
                            <?php
                                }
                            ?>
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
        $bookid = $_POST['bookids'];
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
        $_SESSION['bookid']=$bookid;
        $_SESSION['bookname'] = $bookname;
        $_SESSION['bookaddr'] = $bookaddr;
        $_SESSION['bookmob'] = $bookmob;
        $_SESSION['bookmail']=$bookmail;
        $_SESSION['booktestname'] = $testnamess;
        $insertbookquery = "insert into booktest(bookid, bookname, bookemail, bookmob, bookaddr, bookgender, bookcity, bookdate, booktestname, bookby) 
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
        // $(function() {
        //     $("#example-select").change(function() {
        //         // alert($('option:selected', this).text());
        //         var dropdownvalue = $("#example-select").val();
        //         $.ajax({
        //             type: "POST",
        //             url: "gettestprice.php",
        //             data: {
        //                 testname: dropdownvalue
        //             },
        //             success: function(data) {
        //                 // console.log(data);
        //                 // alert(data);
        //                 $("#testprices").val(data);
        //             }
        //         });
        //     });

        // });
    </script>
    <script>

    </script>
</body>

</html>