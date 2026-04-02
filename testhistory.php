<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <?php
    session_start();
    include 'customerlinks.php';
    ?>
</head>
<style>
    .dt-buttons .dt-button {
        background-color: #3ad29f;
        font-weight: bolder;
    }

    .dt-buttons .dt-button:hover {
        color: #3ad29f;
    }
</style>
<body class="vertical  light  ">
<div class="wrapper">
    <?php
    include 'customerheader.php';
    ?>
    <main role="main" class="main-content">
                <div class="container-fluid">
                    <h2 class="mb-2 page-title">History</h2>
                    <table class="table table-bordered datatables" id="testhistory">
                        <thead class="">
                            <tr>
                                <th>BookId</th>
                                <th>Name</th>
                                <th>Test</th>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'backend/connection.php';
                            $getcustid = $_SESSION['custid'];
                            $showtesthistory = "SELECT schedultest.custid,schedultest.bookid,booktest.bookname,booktest.booktestname,booktest.bookdate,booktest.Time FROM schedultest INNER JOIN booktest ON schedultest.bookid=booktest.bookid WHERE schedultest.custid='$getcustid';";
                            $showtesthistoryrun = mysqli_query($con, $showtesthistory);
                            while ($result = mysqli_fetch_array($showtesthistoryrun)) {
                                $times = $result['Time'];
                            ?>
                                <tr>
                                    <td><?php echo $result['bookid']?></td>
                                    <td><?php echo $result['bookname']?></td>
                                    <td><?php echo $result['booktestname']?></td>
                                    <td><?php echo $result['bookdate']?></td>
                                    <td><?php echo date("g:i A", strtotime($times))?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
            </main>
</div>
<?php 
include 'customerfooter.php'
?>
<script>
    $(document).ready(function() {
        $('#testhistory').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'excelHtml5',
                    title: 'MyTestHistoryExcel'
                },
                {
                    extend: 'pdfHtml5',
                    title: 'MyTestHistoryPdf'
                },
                {
                    extend: 'csvHtml5',
                    title: 'MyTestHistoryCSV'
                },
                {
                    extend:'copyHtml5',
                    title: 'MyTestHistoryTXT'
                }
            ]
        });
    });
</script>
</body>
</html>