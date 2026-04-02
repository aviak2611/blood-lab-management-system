<?php
    $username = 'root'; //xampp username is root
    $password = ''; //xampp has no password
    $server = 'localhost'; //xampp server name is localhost
    $db = 'bloodtest'; //your project database name
    $con = mysqli_connect($server, $username, $password, $db);
    if($con){
        // echo 'connection succesful';
    }
    else{
        echo 'connection failed';
    }
?>