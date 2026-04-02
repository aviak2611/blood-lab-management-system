<?php
// include '../backend/connection.php';
//complete Blood Count
$showcbc="select * from booktest where booktestname='Complete Blood Count'";
$showcbcrun=mysqli_query($con,$showcbc);
$showcbcrunnum=mysqli_num_rows($showcbcrun);
// echo $showcbcrunnum;
// echo '<br>';
//Kidney Function Test
$showkft="select * from booktest where booktestname='Kidney Function Test'";
$showkftrun=mysqli_query($con,$showkft);
$showkftrunnum=mysqli_num_rows($showkftrun);
// echo $showcbcrunnum;
// echo '<br>';
// Liver Function test
$showlft="select * from booktest where booktestname='Liver Function Test'";
$showlftrun=mysqli_query($con,$showlft);
$showlftrunum=mysqli_num_rows($showlftrun);
// echo $showlftrunum;
// echo '<br>';
//Diabetes
$showdia="select * from booktest where booktestname='Diabetes'";
$showdiarun=mysqli_query($con,$showdia);
$showdiarunnum=mysqli_num_rows($showdiarun);
// echo $showdiarunnum;
// echo '<br>';
//Thyroid
$showThyroid="select * from booktest where booktestname='Thyroid'";
$showThyroidrun=mysqli_query($con,$showThyroid);
$showThyroidrunnum=mysqli_num_rows($showThyroidrun);
// echo $showThyroidrunnum;
// echo '<br>';
//D-dimer test
$showdimer="select * from booktest where booktestname='D-dimer test'";
$showdimerun=mysqli_query($con,$showdimer);
$showdimerunnum=mysqli_num_rows($showdimerun);
// echo $showdimerunnum;
// echo '<br>';
?>