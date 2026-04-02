<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    include 'connection.php';
    if (isset($_POST['updatelab'])) {
        $labname = $_POST['labname'];
        $labmail = $_POST['labmail'];
        $labcont = $_POST['labcont'];
        $altcont = $_POST['altcont'];
        $labaddr = $_POST['labaddr'];
        $labcity = $_POST['labcity'];
        $zipcode = $_POST['zipcode'];
        $labreg = $_POST['labreg'];
        $labcert = $_POST['labcert'];
        $certexp = $_POST['certexp'];
        $updatelab = "update labinfo set labname='$labname',labmail='$labmail',labcont='$labcont',
        labalcont='$altcont',labaddr='$labaddr',labcity='$labcity',labzipcode='$zipcode',labreg='$labreg',
        labcert='$labcert',certexp='$certexp' where labid=1";
        $updatelabquery = mysqli_query($con, $updatelab);
        if ($updatelabquery) {
    ?>
            <script>
                location.replace('../companyinfo.php')
            </script>
    <?php
        } else {
            echo mysqli_error($con);
        }
    }
    ?>
</body>

</html>