<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script src="../js/sweetalert2.all.min.js"></script>
    <script>
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Data has Been Deleted',
            showConfirmButton: false,
            timer: 1000
        });
    </script>
    <?php
    include 'connection.php';
    $testid = $_GET['testid'];
    $testname = $_GET['testname'];
    $testprice = $_GET['testprice'];
    $deletetest = "delete from testinfo where testid='$testid'";
    $deletetestquery = mysqli_query($con, $deletetest);
    if ($deletetestquery) {
    ?>
        <script>
            window.setTimeout(function() {
                window.location.href = '../addtests.php';
            }, 1000);
        </script>
    <?php
    } else {
    ?>
        <script>
            alert(<?php echo mysqli_error($con) ?>)
        </script>
    <?php
    }
    ?>
</body>

</html>