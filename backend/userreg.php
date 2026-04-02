<!-- <?php
include 'connection.php';
$query = "select MAX(table_id) from cust_registration";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
$ids = $row[0] + 1;
?>
<?php
  include 'connection.php';
  if (isset($_POST['custreg'])) {
    $table_id=$ids;
    $custid = rand(10000, 99999);
    $custmail = $_POST['custmail'];
    $custfname = $_POST['custfname'];
    $custlname = $_POST['custlname'];
    $custpass = $_POST['custpass'];
    $checkuser = "select cust_mail from cust_registration where cust_mail='$custmail'";
    $checkuserquery = mysqli_query($con, $checkuser);
    $regcust = "insert into cust_registration(table_id,cust_id, cust_mail, cust_fname, cust_lname, cust_pass) values('$table_id','$custid','$custmail','$custfname','$custlname','$custpass')";
    $regcustquery = mysqli_query($con, $regcust);
    if (mysqli_num_rows($checkuserquery)) {
    $deleteuser="delete from cust_registration WHERE table_id=(SELECT MAX(table_id) FROM cust_registration)";
    $deleteuserquery=mysqli_query($con,$deleteuser);
  ?>
      <script>
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Account Already Existed',
          showConfirmButton:false,
          timer:1500,
        });
      </script>
    <?php
    } 
    elseif($regcustquery) {
    ?>
      <script>
        Swal.fire({
          icon: 'success',
          title: 'Congratulations',
          html: '<b>Now Log In with your current LogIn and Passsword</b>,',
          showConfirmButton:false,
          timer:1500,
        });
        window.setTimeout(function() {
          window.location.href = '../index.php';
        }, 1500);
      </script>
  <?php
    } else {
      echo mysqli_error($con);
    }
  }
  ?> -->