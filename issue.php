<!-- <script src="js/sweetalert2.all.min.js"></script> -->
<style>
     body.swal2-shown>[aria-hidden="true"] {
        transition: 0.1s filter;
        filter: blur(10px);
    }

</style>
<?php
session_start();
include 'backend/connection.php';
include 'customerfooter.php';
if (isset($_POST['subissue'])) {
    $custid = $_SESSION['custid'];
    $issuecheckbox = implode(",", $_POST['issue']);
    $messgeissue = $_POST['messageissue'];
    $insertissue = "insert into issue(custids, issue, message) values ('$custid','$issuecheckbox','$messgeissue')";
    $insertissuerun = mysqli_query($con, $insertissue);
    if ($insertissuerun) {
        // echo 'success';
?>

<?php
    } else {
        echo mysqli_error($con);
    }
}
?>
<script>
    $(document).ready(function() {
        Swal.fire({
            icon: 'warning',
            title: 'Issue Sumitted',
            html: '<b>We Will Contact Through Mail</b>,',
            showConfirmButton: false,
            timer: 2000,
        });
        window.setTimeout(function() {
            window.location.href = 'customerprofile.php';
        }, 2000);
    });
</script>