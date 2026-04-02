<?php
    $getppp=$_POST['testname'];
    include 'backend/connection.php';
    $showhosps = "select * from testinfo where testname='$getppp'";
    $showhospsquery = mysqli_query($con, $showhosps);
    while ($showhospsqueryfetch = mysqli_fetch_array($showhospsquery)) {
        echo $showhospsqueryfetch['testprice'];
   }
?>