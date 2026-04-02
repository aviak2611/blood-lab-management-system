<?php
session_start();
include 'backend/connection.php';
if (!isset($_SESSION['getmail'])) {
    header('location:index2.php');
}
?>

<head>
    <link rel="stylesheet" href="css/animate.min.css">
</head>
<style>
    body.swal2-shown>[aria-hidden="true"] {
        transition: 0.1s filter;
        filter: blur(10px);
    }

    aside .vertnav .nav-item a:hover {
        color: greenyellow;
        letter-spacing: 1px;
        /* transition: transform 0.16s cubic-bezier(0.65, 0.61, 0.18, 1.8) 0.02s, filter 0.32s linear; */
    }
</style>
<!-- <div class="spinner-border text-primary d-flex justify-content-center" id="spinner"></div> -->
<nav class="topnav navbar navbar-light">
    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>
    <form class="form-inline mr-auto searchform text-muted">
        <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
    </form>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
                <i class="fe fe-sun fe-24"></i>
                <!-- <img src="icons/moon.svg" alt="" style="height: 30px;width: 30px;" id="modesvg"> -->
            </a>
        </li>
        <!-- <a href="" id="modeSwitcher" data-mode="light"> -->
            <!-- <label class="switch mt-3">
                <input type="checkbox" id="modeSwitcher" data-mode="light">
                <span class="slider"></span>
            </label> -->
        <!-- </a> -->
        <li class="nav-item nav-notif">
            <button style="background-color: transparent;outline: none;border: none;">
                <a class="nav-link text-muted my-2 animate__animated animate__pulse animate__infinite" href="./#" data-toggle="modal" data-target=".modal-notif">
                    <span class="fe fe-bell fe-24"></span>
                    <!-- <span class="dot dot-md bg-success"></span> -->
                    <?php
                    include 'backend/connection.php';
                    $todaysdate = date('Y-m-d');
                    $shownot = "select * from schedultest where testdate='$todaysdate'";
                    $shownotrun = mysqli_query($con, $shownot);
                    $shownotrunnum = mysqli_num_rows($shownotrun);
                    ?>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill badge-danger"><small><?php echo $shownotrunnum ?></small></span>

                    <!-- <span class="visually-hidden">unread messages</span> -->
                </a>
            </button>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="avatar avatar-sm mt-2">
                    <img src="./assets/avatars/AVATARZ - Tomas.png" alt="..." class="avatar-img rounded-circle">
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="custlogout.php"><i class="fe fe-log-out fe-16"></i><span> LogOut</span></a>
            </div>
        </li>
    </ul>
</nav>
<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="dashboard.php">
                <img src="icons/logo3.png" alt="" class="img-fluid" style="width: 64px;">
            </a>
        </div>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="dashboard.php">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">Dashboard</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="companyinfo.php">
                    <i class="fe fe-info fe-16"></i>
                    <span class="ml-3 item-text">Lab Info</span>
                </a>
            </li>
            <!-- <li class="nav-item w-100">
                <a class="nav-link" href="registerHospitals.php">
                    <i class="fe fe-activity fe-16"></i>
                    <span class="ml-3 item-text">Register new Hospital</span>
                </a>
            </li> -->
            <li class="nav-item dropdown">
                <a href="#charts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-users fe-16"></i>
                    <span class="ml-3 item-text">Manage Employees</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="charts">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="manageemployee.php"><i class="fe fe-plus-circle fe-16"></i><span class="ml-1 item-text">Add Employee</span></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link pl-3" href=""><i class="fe fe-edit fe-16"></i><span class="ml-1 item-text">Update Employee</span></a>
                    </li> -->
                </ul>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="addtests.php">
                    <i class="fe fe-target fe-16"></i>
                    <span class="ml-3 item-text">Manage Test</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#chartss" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-clock fe-16"></i>
                    <span class="ml-3 item-text">Schedule Test</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="chartss">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="booktestadmin.php"><i class="fe fe-smartphone fe-16"></i><span class="ml-1 item-text">Book Test</span></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link pl-3" href="viewbills.php"><i class="fe fe-user fe-16"></i><span class="ml-1 item-text">By Customers</span></a>
                    </li> -->
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#chartsss" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-users fe-16"></i>
                    <span class="ml-3 item-text">Reports</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="chartsss">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="UserReport.php"><i class="fe fe-user-plus fe-16"></i><span class="ml-1 item-text">User Report</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="employeereport.php"><i class="fe fe-users fe-16"></i><span class="ml-1 item-text">Employee Report</span></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link pl-3" href=""><i class="fe fe-plus-circle fe-16"></i><span class="ml-1 item-text">Billing Report</span></a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="DateWiseReport.php"><i class="fe fe-calendar fe-16"></i><span class="ml-1 item-text">Date Wise Report</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="BillingReport.php"><i class="fe fe-dollar-sign fe-16"></i><span class="ml-1 item-text">Billing Report</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="TestwiseReport.php"><i class="fe fe-sliders fe-16"></i><span class="ml-1 item-text">Test Wise Report</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="FeedBackReport.php"><i class="fe fe-message-square fe-16"></i><span class="ml-1 item-text">FeedBack Report</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="ComplaintReport.php"><i class="fe fe-alert-triangle fe-16"></i><span class="ml-1 item-text">Complaint Report</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>
<div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-danger">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                $todaysdate = date('Y-m-d');
                $shownots = "select * from schedultest where testdate='$todaysdate'";
                $shownotruns = mysqli_query($con, $shownots);
                while ($rows = mysqli_fetch_array($shownotruns)) {

                ?>
                    <div class="list-group list-group-flush my-n3">
                        <div class="list-group-item bg-transparent">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- <span class="fe fe-box fe-24"></span>  -->
                                    <span><img src="icons/testtube.svg" alt="" style="height: 24px;"></span>
                                    <!-- #6c757d -->
                                </div>
                                <div class="col">
                                    <small><strong><?php echo $rows['bfname'] . " " . $rows['blname'] ?> Booked Test</strong></small>
                                    <div class="my-0 text-muted small"><?php echo $rows['testname'] ?></div>
                                    <?php
                                    $times = $rows['testtime'];
                                    $timeIn12HourFormat = date("g:i A", strtotime($times));
                                    ?>
                                    <small class="badge badge-pill badge-light text-muted"><?php echo $timeIn12HourFormat ?></small>
                                </div>
                            </div>
                        </div>
                    </div> <!-- / .list-group -->
                <?php
                }
                ?>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
            </div> -->
        </div>
    </div>
</div>
<script>

</script>

