<?php
session_start();
include 'backend/connection.php';
include 'footer.php';
if(isset($_POST['subfeedback'])){
$custid=$_SESSION['custid'];
$feedmessage=$_POST['feedmessage'];
$insertfeedback="insert into feedback(custids, feedmessage) VALUES ('$custid','$feedmessage')";
$insertfeedbackrun=mysqli_query($con,$insertfeedback);
if($insertfeedbackrun){
    // echo 'success';
}
else{
    echo mysqli_error($con);
}
}
?>
<script>
    $(document).ready(function() {
        Swal.fire({
            icon: 'success',
            title: 'Thank You',
            html: '<b>Thank You For Your Valuable Feedback</b>,',
            showConfirmButton: false,
            timer: 2000,
        });
        window.setTimeout(function() {
            window.location.href = 'customerprofile.php';
        }, 2000);
    });
</script>