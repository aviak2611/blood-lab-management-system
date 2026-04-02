<?php
include 'backend/connection.php';
$getstart = $_POST['dateStart'];
$getend = $_POST['dateEnd'];
?>
<style>
    .dt-buttons .dt-button {
        background-color: #3ad29f;
        font-weight: bolder;
    }

    .dt-buttons .dt-button:hover {
        color: #3ad29f;
    }
</style>
<table class="table table-striped datatables" id="examples">
    <thead class="">
        <tr>
            <th>BookID</th>
            <th>Customer Name</th>
            <th>Test Name</th>
            <th>Test Date</th>
            <th>Time</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $showempstable = "select * from booktest where bookdate between '$getstart' and '$getend'";
        $showempstablerun = mysqli_query($con, $showempstable);
        while ($result = mysqli_fetch_array($showempstablerun)) {
            $times = $result['Time'];
            // date("g:i A", strtotime($times)
        ?>
            <tr>
                <td><?php echo $result['bookid'] ?></td>
                <td><?php echo $result['bookname'] ?></td>
                <td><?php echo $result['booktestname'] ?></td>
                <td><?php echo $result['bookdate'] ?></td>
                <td><?php echo date("g:i A", strtotime($times)) ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<script>
    $(document).ready(function() {
        $('#examples').DataTable({
            dom: 'Bfrtip',
            // buttons: [
            //     'copyHtml5',
            //     'excelHtml5',
            //     'csvHtml5',
            //     'pdfHtml5'
            // ]
            buttons: [
                {
                    extend: 'excelHtml5',
                    title: 'DateRangeExcel'
                },
                {
                    extend: 'pdfHtml5',
                    title: 'DateRangePdf'
                },
                {
                    extend: 'csvHtml5',
                    title: 'DateRangeCSV'
                },
                {
                    extend:'copyHtml5',
                    title: 'DateRangeTXT'
                }
            ]
        });
    });
</script>