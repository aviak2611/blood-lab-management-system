<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Hospital</title>
</head>
<body>
<script src="../js/sweetalert2.all.min.js"></script>
    <script>
        
    </script>
    <?php
    include 'connection.php';
    $hospid=$_GET['hospid'];
    $hosreg=$_GET['hosreg'];
    $hosdin=$_GET['hosdin'];
    $hosname=$_GET['hosname'];
    $hosmail=$_GET['hosmail'];
    $hosaddr=$_GET['hosaddr'];
    $hoscont=$_GET['hoscont'];
    $deletehospital="delete from hospitalreg where hospitalid='$hospid'";
    $deletehospitalquery=mysqli_query($con,$deletehospital);
    if($deletehospitalquery){
        ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Data has Been Deleted',
            showConfirmButton: false,
            timer: 1000
        });
        window.setTimeout(function() {
            window.location.href = '../registerHospitals.php';
        }, 1500);
        </script>
        <?php
    }else{
        echo mysqli_error($con);
    }
    ?>
</body>
</html>