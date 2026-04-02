<?php
// session_start();
$empid=$_GET['empid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'connection.php';
        $deleteemployee="delete from m_employee where empid='$empid'";
        $deleteemployeerun=mysqli_query($con,$deleteemployee);
        if($deleteemployeerun){
            header('location:../manageemployee.php');
        }  
        else{
            echo mysqli_error($con);
        }
    ?>
</body>
</html>