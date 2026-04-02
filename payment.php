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
<style>
    @keyframes animate {
        0% {
            transform: rotateY(0deg);
        }

        100% {
            transform: rotateY(360deg);
        }
    }
</style>


<body class="vertical  light  ">
    <div class="wrapper">
        <?php
        include 'header.php';
        include 'backend/connection.php';
        ?>
        <main role="main" class="main-content">
            <div class="container-fluid">
                <?php
                $bookidss = $_SESSION['bookidsss'];
                echo '<br>';
                $payamount = $_SESSION['payamount'];
                ?>
            </div>
        </main>
    </div>
    <?php
    include 'footer.php'
    ?>
    <script>
        $(document).ready(function() {
            Swal.fire({
                title: 'Payment Processing',
                // text: 'Modal with a custom image.',
                // imageUrl: 'https://unsplash.it/400/200',
                // imageWidth: 400,
                // imageHeight: 200,
                html: '<img src="icons/rupee.svg" style="width:400px;height:200px;animation: animate 1s linear infinite;">',
                // imageAlt: 'Custom image',
                showConfirmButton: false,
                timer: 7000
            }).then(function() {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Payment Sucessful',
                    showConfirmButton: false,
                    timer: 2000
                })
            })
        });
    </script>
    <?php
    include 'backend/connection.php';
    $inserpay = "insert into payment(bookids, aamount) VALUES ('$bookidss','$payamount')";
    $insertpayrun = mysqli_query($con, $inserpay);
    if ($insertpayrun) {
    ?>
        <script>
            window.setTimeout(function() {
                window.location.href = 'dashboard.php';
            }, 9050);
        </script>
    <?php
    } else {
        echo mysqli_error($con);
    }
    ?>
</body>

</html>