<?php
include 'backend/connection.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <?php
    include 'links.php';
    ?>
</head>

<body>

    <body class="vertical  light  ">
        <div class="wrapper">
            <?php
            include 'header.php';
            ?>
            <main role="main" class="main-content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10 col-xl-8">
                            <div class="row align-items-center mb-4">
                                <div class="col">
                                    <h2 class="h5 page-title"><small class="text-muted text-uppercase">Invoice</small><br><?php echo "#" . rand(1000, 9999) ?></h2>
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-secondary" id="printbtn" onclick="window.print()">Print</button>
                                    <!-- <button type="button" class="btn btn-primary" id="">Pay</button> -->
                                </div>
                            </div>
                            <div class="card shadow" id="invoicediv">
                                <div class="card-body p-5">
                                    <div class="row mb-5">
                                        <div class="col-12 text-center mb-4">
                                            <img src="icons/modernlab.png" class="navbar-brand-img brand-md mx-auto mb-4" alt="..." style="width: 200px;margin-top:50px;">
                                            <h2 class="mb-0 text-uppercase">Invoice</h2>
                                            <p class="text-muted"> We make Life</p>
                                        </div>
                                        <div class="col-md-7">
                                            <?php
                                            $getbookid = $_SESSION['bookid'];
                                            $selectinfos = "select * from labinfo";
                                            $selectinfosrun = mysqli_query($con, $selectinfos);
                                            while ($row = mysqli_fetch_array($selectinfosrun)) {
                                            ?>
                                                <p class="small text-muted text-uppercase mb-2">Invoice from</p>
                                                <p class="mb-4">
                                                    <strong><?php echo $row[1]; ?></strong><br><?php echo $row[5] ?><br><?php echo $row[4] ?>
                                                </p>
                                                <!-- <p>
                                                <span class="small text-muted text-uppercase">Invoice #</span><br>
                                                <strong>1806</strong>
                                            </p> -->
                                            <?php
                                            }

                                            ?>
                                        </div>
                                        <div class="col-md-5">
                                            <p class="small text-muted text-uppercase mb-2">Invoice to</p>
                                            <p class="mb-4">
                                                <strong><?php echo $_SESSION['bookname']; ?></strong><br> <?php echo $_SESSION['bookaddr']; ?><br> +91-<?php echo $_SESSION['bookmob']; ?>
                                            </p>
                                            <p>
                                                <small class="small text-muted text-uppercase">Bill Date</small><br>
                                                <strong><?php echo date('M, d, Y') ?></strong>

                                            </p>
                                        </div>
                                    </div> <!-- /.row -->
                                    <table class="table table-borderless table-striped w-100">
                                        <thead>
                                            <tr>
                                                <th scope="col">id</th>
                                                <th scope="col">Description</th>
                                                <!-- <th scope="col" class="text-right">Rate</th> -->
                                                <!-- <th scope="col" class="text-right">Hours</th> -->
                                                <th scope="col" class="text-right">Ammout</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $gettestname = $_SESSION['booktestname'];
                                            $showtestinfos = "select * from testinfo where testname='$gettestname'";
                                            // $showtestinfos="select * from testinfo where testid='6826'";
                                            $showtestinfossrun = mysqli_query($con, $showtestinfos);
                                            while ($rows = mysqli_fetch_array($showtestinfossrun)) {
                                            ?>
                                                <tr>

                                                    <td scope="row"><?php echo $rows[0]; ?></td>
                                                    <td> <?php echo $_SESSION['booktestname']; ?><br>
                                                        <span class="small text-muted">Step Toward Healthy Life</span>
                                                    </td>
                                                    <!-- <td class="text-right">₹</td> -->
                                                    <!-- <td class="text-right">2</td> -->
                                                    <td class="text-right" id="tetprices">₹<?php echo $rows[2]; ?></td>

                                                </tr>

                                        </tbody>
                                    </table>
                                    <div class="row mt-5">
                                        <div class="col-2 text-center">
                                            <img src="icons/qr2.svg" class="navbar-brand-img brand-sm mx-auto my-4" alt="...">
                                        </div>
                                        <div class="col-md-5">
                                            <p class="text-muted small" style="text-align: justify;text-justify: inter-word;">
                                                <strong>Note :</strong>
                                                Thank you for your recent purchase. Please find the attached invoice for your reference. The invoice includes a breakdown of the items purchased, the total amount due, and our payment information.

                                                If you have any questions or concerns about the invoice, please don't hesitate to contact us.

                                                Thank you for your business.
                                            </p>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="text-right mr-2">
                                                <p class="mb-2 h6">
                                                    <span class="text-muted">Subtotal : </span>
                                                    <strong>₹<?php echo $rows[2]; ?></strong>
                                                </p>
                                                <?php
                                                $makepriceint = (int)$rows[2]; //in this case ₹800
                                                $getgst = $makepriceint + ((12 / 100) * $makepriceint); //800+(12/100)*100=896;
                                                $total = $getgst;
                                                ?>
                                                <p class="mb-2 h6">
                                                    <span class="text-muted">GST (12%) : </span>
                                                    <!-- <strong>₹28.50</strong> -->
                                                    <strong>₹<?php echo $getgst; ?></strong>
                                                </p>
                                                <p class="mb-2 h6">
                                                    <span class="text-muted">Total : </span>
                                                    <span>₹<?php echo $total; ?></span>
                                                </p>
                                            <?php
                                                // echo mysqli_error($con);    
                                            }
                                            ?>
                                            </div>
                                        </div>
                                    </div> <!-- /.row -->
                                    <form action="page-invoice.php" method="POST">
                                        <button type="submit" name="pybtn" class="btn mb-2 btn-primary btn-lg btn-block">Pay</button>
                                    </form>
                                    <!-- <button type="submit" name="pybtn" class="btn mb-2 btn-primary btn-lg btn-block">Pay</button> -->
                                </div> <!-- /.card-body -->
                            </div> <!-- /.card -->
                        </div> <!-- /.col-12 -->
                    </div> <!-- .row -->
                </div> <!-- .container-fluid -->

            </main>
        </div>
        <?php
        include 'footer.php'
        ?>
        <script>
            // $('#printbtn').click(function() {
            //     $('#invoicediv').printThis({
            //         importCSS:true,
            //         importStyle: true,
            //         loadCSS:["css/app-dark.css","css/app-light.css","css/app-rtl.css"]
            //     });
            // });
        </script>
        <?php
        if (isset($_POST['pybtn'])) {
            $_SESSION['bookidsss'] = $getbookid;
            $_SESSION['payamount'] = $total;
            ?>
            <script>
                location.replace('payment.php');
            </script>
            <?php
            
        }
        ?>
    </body>
    <script>

    </script>

</html>