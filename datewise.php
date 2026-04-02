
<?php
include 'backend/connection.php';
$getdate = $_POST['datevalue'];
// include 'footer.php';
?>
<table class="table table-hover text-center" id="myTable">
    <thead>
        <tr>
            <th>BookId</th>
            <th>Customer Id</th>
            <th>Customer Name</th>
            <th>Customer Mail</th>
            <th>Mobile Number</th>
            <!-- <th>City</th> -->
            <th>Test Name</th>
            <th>Scheduled date</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        // $todaysdate = date('Y-m-d');
        // $shesheduledtest = "select * from schedultest ORDER BY DATE(testdate) DESC ";
        $shesheduledtest = "select * from schedultest where testdate='$getdate'";
        $shesheduledtestrun = mysqli_query($con, $shesheduledtest);

        while ($rows = mysqli_fetch_array($shesheduledtestrun)) {
            $getbookeddate = $rows['testdate'];
            $gettbookids = $rows['bookid'];
            $getbookedid = "select bookid from booktest where bookid='$gettbookids'";
            $getbookedidrun = mysqli_query($con, $getbookedid);
            $getbookeddate1 = strtotime($getbookeddate);
            $expdate = date('Y-m-d');
            $expdate1 = strtotime($expdate);
        ?>

            <tr>
                <td><?php echo $rows['bookid'] ?></td>
                <td><?php echo $rows['custid'] ?></td>
                <td><?php echo $rows['bfname'] . " " . $rows['blname'] ?></td>
                <td><?php echo $rows['bemail'] ?></td>
                <td><?php echo $rows['bmob'] ?></td>
                <!-- <td><?php echo $rows[''] ?></td> -->
                <td><?php echo $rows['testname'] ?></td>
                <td><?php echo $rows['testdate'] ?></td>
                <?php
                if (mysqli_num_rows($getbookedidrun)) {
                ?>
                    <td><button class="btn btn-success text-white w-100">Booked</button></td>
                <?php
                } else if ($getbookeddate1 < $expdate1) {
                ?>
                    <td><a href="scheduledtest.php?bookid=<?php echo $rows['bookid'] ?>"><button class="btn btn-danger text-white w-100">Rechedule</button></a></td>
                <?php
                } else if ($getbookeddate1 > $expdate1) {
                ?>
                    <td><button class="btn btn-warning text-white w-100" onclick="alert('This Test is Scheduled')">Scheduled</button></td>
                <?php
                } else {
                ?>
                    <td><a href="scheduledtest.php?bookid=<?php echo $rows['bookid'] ?>"><button class="btn btn-primary w-100">Take Test</button></a></td>
                <?php
                }
                ?>
            </tr>
        <?php
        }
// include 'footer.php';
        ?>
    </tbody>
</table>
<script>
      $(document).ready(function() {
        $('#myTable').DataTable({
          order: [
            [6, 'desc']
          ],

        });
      });
    </script>