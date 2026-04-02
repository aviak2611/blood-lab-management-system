<style>
    body.swal2-shown>[aria-hidden="true"] {
        transition: 0.1s filter;
        filter: blur(10px);
    }

    .issuebtn {
        background-color: transparent;
        border: none;
        outline: none;
    }

    #example-textarea {
        resize: none;
    }

    .checkbox-wrapper-33 {
        --s-xsmall: 0.625em;
        --s-small: 1.2em;
        --border-width: 1px;
        --c-primary: #5F11E8;
        --c-primary-20-percent-opacity: rgb(95 17 232 / 20%);
        --c-primary-10-percent-opacity: rgb(95 17 232 / 10%);
        --t-base: 0.4s;
        --t-fast: 0.2s;
        --e-in: ease-in;
        --e-out: cubic-bezier(.11, .29, .18, .98);
    }

    .checkbox-wrapper-33 .visuallyhidden {
        border: 0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
    }

    .checkbox-wrapper-33 .checkbox {
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }

    .checkbox-wrapper-33 .checkbox+.checkbox {
        margin-top: var(--s-small);
    }

    .checkbox-wrapper-33 .checkbox__symbol {
        display: inline-block;
        display: flex;
        margin-right: calc(var(--s-small) * 0.7);
        border: var(--border-width) solid var(--c-primary);
        position: relative;
        border-radius: 0.1em;
        width: 1.5em;
        height: 1.5em;
        transition: box-shadow var(--t-base) var(--e-out), background-color var(--t-base);
        box-shadow: 0 0 0 0 var(--c-primary-10-percent-opacity);
    }

    .checkbox-wrapper-33 .checkbox__symbol:after {
        content: "";
        position: absolute;
        top: 0.5em;
        left: 0.5em;
        width: 0.25em;
        height: 0.25em;
        background-color: var(--c-primary-20-percent-opacity);
        opacity: 0;
        border-radius: 3em;
        transform: scale(1);
        transform-origin: 50% 50%;
    }

    .checkbox-wrapper-33 .checkbox .icon-checkbox {
        width: 1em;
        height: 1em;
        margin: auto;
        fill: none;
        stroke-width: 3;
        stroke: currentColor;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke-miterlimit: 10;
        color: var(--c-primary);
        display: inline-block;
    }

    .checkbox-wrapper-33 .checkbox .icon-checkbox path {
        transition: stroke-dashoffset var(--t-fast) var(--e-in);
        stroke-dasharray: 30px, 31px;
        stroke-dashoffset: 31px;
    }

    .checkbox-wrapper-33 .checkbox__textwrapper {
        margin: 0;
    }

    .checkbox-wrapper-33 .checkbox__trigger:checked+.checkbox__symbol:after {
        -webkit-animation: ripple-33 1.5s var(--e-out);
        animation: ripple-33 1.5s var(--e-out);
    }

    .checkbox-wrapper-33 .checkbox__trigger:checked+.checkbox__symbol .icon-checkbox path {
        transition: stroke-dashoffset var(--t-base) var(--e-out);
        stroke-dashoffset: 0px;
    }

    .checkbox-wrapper-33 .checkbox__trigger:focus+.checkbox__symbol {
        box-shadow: 0 0 0 0.25em var(--c-primary-20-percent-opacity);
    }

    @-webkit-keyframes ripple-33 {
        from {
            transform: scale(0);
            opacity: 1;
        }

        to {
            opacity: 0;
            transform: scale(20);
        }
    }

    @keyframes ripple-33 {
        from {
            transform: scale(0);
            opacity: 1;
        }

        to {
            opacity: 0;
            transform: scale(20);
        }
    }
</style>
<nav class="topnav navbar navbar-light">
    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>
    <form class="form-inline mr-auto searchform text-muted">
        <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
    </form>
    <ul class="nav">
        <!-- <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
                <i class="fe fe-sun fe-16"></i>
            </a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link text-muted my-1" href="#" id="modeSwitcher" data-mode="light">
                <i class="fe fe-sun fe-24"></i>
                <!-- <img src="icons/moon.svg" alt="" style="height: 32px;width: 32px;" id="modesvg"> -->
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="avatar avatar-sm mt-2">
                    <img src="icons/defaultavatar.svg" alt="..." class="avatar-img rounded-circle">
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
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="customerprofile.php">
                <img src="icons/modernlab.png" alt="" class="img-fluid" style="width: 120px; height:140px;margin-bottom: -30px; ">
            </a>
        </div>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="customerprofile.php">
                    <i class="fe fe-user fe-16"></i>
                    <span class="ml-3 item-text">My Profile</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="BookTest.php">
                    <i class="fe fe-smartphone fe-16"></i>
                    <span class="ml-3 item-text">Book a Test</span>
                </a>
            </li>
            <!-- <li class="nav-item w-100">
                <a class="nav-link" href="testhistory.php">
                    <i class="fe fe-clock fe-16"></i>
                    <span class="ml-3 item-text">Test History</span>
                </a>
                
            </li> -->

            <li class="nav-item dropdown">
                <a href="#reportsDropdown" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-clipboard fe-16"></i>
                    <span class="ml-3 item-text">Report</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="reportsDropdown">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="testhistory.php"><i class="fe fe-clock fe-16"></i> <span class="ml-1 item-text">Test History</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="UserDateWiseReport.php"><i class="fe fe-calendar fe-16"></i> <span class="ml-1 item-text">Date Wise History</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="FeedBackReport.php"><i class="fe fe-message-square fe-16"></i> <span class="ml-1 item-text">Feedback History</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="ComplaintReport.php"><i class="fe fe-alert-triangle fe-16"></i> <span class="ml-1 item-text">Raised Issues</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="UserReport.php"><i class="fe fe-alert-triangle fe-16"></i> <span class="ml-1 item-text">City Wise History</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="TestwiseReport.php"><i class="fe fe-alert-triangle fe-16"></i> <span class="ml-1 item-text">Testwise History</span></a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a href="#chartsss" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-message-square fe-16"></i>
                    <span class="ml-3 item-text">Feedback</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="chartsss">
                    <li class="nav-item">
                        <button class="nav-link pl-3 issuebtn" href="" data-toggle="modal" data-target="#verticalModalFeedback"><i class="fe fe-message-square fe-16"></i> <span class="ml-1 item-text">Feedback</span></button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link pl-3 issuebtn" href="" data-toggle="modal" data-target="#verticalModal"><i class="fe fe-alert-triangle fe-16"></i> <span class="ml-1 item-text">Raise An Issue</span></button>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>
<div class="modal fade" id="verticalModal" tabindex="-1" role="dialog" aria-labelledby="verticalModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="verticalModalTitle"><i class="fe fe-alert-triangle fe-16"></i><span> Raise Issue</span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="issue.php" method="post">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="checkbox-wrapper-33 col-md-6">
                            <label class="checkbox">
                                <input class="checkbox__trigger visuallyhidden" type="checkbox" name="issue[]" value="Technical Isses" />
                                <span class="checkbox__symbol">
                                    <svg aria-hidden="true" class="icon-checkbox" width="28px" height="28px" viewBox="0 0 28 28" version="1" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 14l8 7L24 7"></path>
                                    </svg>
                                </span>
                                <p class="checkbox__textwrapper">Technical Isses</p>
                            </label>
                        </div>
                        <div class="checkbox-wrapper-33 col-md-6">
                            <label class="checkbox">
                                <input class="checkbox__trigger visuallyhidden" type="checkbox" name="issue[]" value="Glitched User InterFace" />
                                <span class="checkbox__symbol">
                                    <svg aria-hidden="true" class="icon-checkbox" width="28px" height="28px" viewBox="0 0 28 28" version="1" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 14l8 7L24 7"></path>
                                    </svg>
                                </span>
                                <p class="checkbox__textwrapper">Glitched User InterFace</p>
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="example-textarea">Message</label>
                        <textarea class="form-control" name="messageissue" id="example-textarea" rows="4" autofocus="autofocus" placeholder="Tell Us......"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn mb-2 btn-danger" name="subissue">Submit Issue</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- <div class="modal fade" id="verticalModalFeedback" tabindex="-1" role="dialog" aria-labelledby="verticalModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="verticalModalTitle"><i class="fe fe-message-square fe-16"></i><span> Give Us Feedback</span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="feedback.php" method="post">
                <div class="modal-body">
                    <div class="form-row text-center">
                        <?php include 'starrating.php' ?>
                    </div>
                    <div class="form-group mb-3">
                        <label for="example-textarea">Message</label>
                        <textarea class="form-control" name="feedmessage" id="example-textarea" rows="4" autofocus="autofocus" placeholder="Tell Us......"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn mb-2 btn-success text-white" name="subfeedback">Submit</button>
                </div>

        </div>
    </div>
</div> -->