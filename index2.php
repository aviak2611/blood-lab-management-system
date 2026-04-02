<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Login</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="css/simplebar.css">
    <!-- Fonts CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="css/app-dark.css" id="darkTheme" disabled>
    <link rel="stylesheet" href="css/animate.min.css">
</head>
<style>
    body {
        overflow: hidden;
    }
</style>

<body class="light ">
    <div class="wrapper vh-100">
        <div class="row align-items-center h-100">
            <form action="index2.php" method="POST" autocomplete="off" class="col-lg-3 col-md-4 col-10 mx-auto text-center">
                <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                    <img src="icons/modernlab.png" alt="" style="height: 250px;margin-bottom: -30px;">
                </a>
                <h1 class="h6 mb-3">welcome</h1>
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" name="username" class="form-control form-control-lg" placeholder="Email address"
                        required="">
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="password" class="form-control form-control-lg"
                        placeholder="Password" required="">
                </div>
                <div class="form-group mb-3">
                    <label for="example-select sr-only">Select Your Role</label>
                    <select class="form-control form-control-lg" id="example-select" required="" autofocus="" name="getrole">
                        <option value=""></option>
                        <!-- <option value="hospitalreg">Hospital Login</option> -->
                        <option value="cust_registration">Customer Login</option>
                        <option value="admitable">Admin Login</option>
                    </select>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <!-- <label for="inputEmail4">Email</label> -->
                        <input type="hidden" class="form-control" id="inputEmail4" name="usertable">
                    </div>
                    <div class="form-group col-md-6">
                        <!-- <label for="inputEmail4">Email</label> -->
                        <input type="hidden" class="form-control" id="inputEmail5" name="passtable">
                    </div>
                </div>
                <div class="clearfix mb-3">
                    <small class="float-right animate__animated animate__pulse animate__repeat-3" ><a href="Register.php" style="text-decoration: none;">New User? Register now</a></small>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="submitlogin">Let me in</button>
                <p class="mt-5 mb-3 text-muted" id="yearlogin">© <?php echo date('Y');?></p>
            </form>
            
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src='js/daterangepicker.js'></script>
    <script src='js/jquery.stickOnScroll.js'></script>
    <script src="js/tinycolor-min.js"></script>
    <script src="js/config.js"></script>
    <script src="js/apps.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
    </script>
    <script>
        $(function() {
            $("#example-select").change(function() {
                // alert($('option:selected', this).text());
                var dropdownvalue = $("#example-select").val();
                // alert (dropdownvalue);
                if(dropdownvalue=='admitable'){
                    // var usertable=document.getElementById('inputEmail4').val('adminuser');
                    // var passtable=document.getElementById('inputEmail5').val('adminpass');
                   $("#inputEmail4").val('adminuser');
                   $("#inputEmail5").val('adminpass');
                }
                else if(dropdownvalue=='cust_registration'){
                   $("#inputEmail4").val('cust_mail');
                   $("#inputEmail5").val('cust_pass');
                }
                else if(dropdownvalue=='hospitalreg'){
                   $("#inputEmail4").val('hospitalmail');
                   $("#inputEmail5").val('');
                }
                else if(dropdownvalue==''){
                   $("#inputEmail4").val('');
                   $("#inputEmail5").val('');
                    Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    html: '<b>Please Select Role</b>,',
                    showConfirmButton: false,
                    timer: 1500,
                    });
                }
            })
        });
    </script>
    <?php
    include 'backend/connection.php';
    if(isset($_POST['submitlogin'])){
        $getusername=$_POST['username'];
        $getpassword=$_POST['password'];
        $getpassworddecrypt=md5($getpassword);
        $getrole=$_POST['getrole'];
        $usertable=$_POST['usertable'];
        $passtable=$_POST['passtable'];
        $_SESSION['getmail'] = $getusername;
        $loginquery="select * from $getrole where $usertable='$getusername' and $passtable='$getpassworddecrypt'";
        $loginqueryrun=mysqli_query($con,$loginquery);
        if(mysqli_num_rows($loginqueryrun)){
            if($getrole=="cust_registration"){
                // Lifesourceadmin@gmail.com
                ?>
                <script>
                    location.replace('customerprofile.php');
                </script>
                <?Php
            }
            elseif($getrole=="admitable"){
                ?>
                <script>
                    location.replace('dashboard.php');
                </script>
                <?php
            }
            elseif($getrole=="hospitalreg"){
                ?>
                <script>
                     Swal.fire({
                    icon: 'info',
                    title: 'Coming Soon!',
                    html: '<b>Wait for Sometime</b>,',
                    showConfirmButton: false,
                    timer: 1500,
                    });
                </script>
                <?php
            }
            
        }else{
            ?>
             <script>
                // alert('failed');
                Swal.fire({
                    icon: 'error',
                    title: 'Somethimg Went Wrong!',
                    html: '<b>Login Failed</b>,',
                    showConfirmButton: false,
                    timer: 1500,
                    });
            </script>
            <?php
            // mysqli_error($con);
        }

    }
    ?>
</body>
</html>
</body>

</html>