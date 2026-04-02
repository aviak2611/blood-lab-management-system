<?php
include 'backend/connection.php';
$gettestvalue=$_POST['testvalue'];

?>
<style>
    .dt-buttons .dt-button{
        background-color: #3ad29f;
        font-weight: bolder;
    }
    .dt-buttons .dt-button:hover{
        color: #3ad29f;
    }
</style>
<table class="table table-hover" id="myTable">
    <thead>
        <tr>
           <th>Customer Id</th>
           <th>Book Id</th>
           <th>Customer Name</th>
           <th>Test Date</th>
           <th>Test Time</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $showinfos="SELECT schedultest.custid,schedultest.bookid,schedultest.bfname,schedultest.blname,schedultest.testdate,schedultest.testtime
        FROM schedultest INNER JOIN payment on schedultest.bookid=payment.bookids WHERE schedultest.testname='$gettestvalue'";
        $showinfosrun=mysqli_query($con,$showinfos);
        while($res=mysqli_fetch_array($showinfosrun)){
        ?>
        <tr>
            <td><?php echo $res[0]?></td>
            <td><?php echo $res[1]?></td>
            <td><?php echo $res[2]." ".$res[3]?></td>
            <td><?php echo $res[4]?></td>
            <td><?php echo $res[5]?></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<script>
    $(document).ready(function() {
                $('#myTable').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                {
                    extend: 'excelHtml5',
                    title: 'TestWiseExcel'
                },
                {
                    extend: 'pdfHtml5',
                    title: 'TestWisePdf'
                },
                {
                    extend: 'csvHtml5',
                    title: 'TestWiseCSV'
                },
                {
                    extend:'copyHtml5',
                    title: 'TestWiseTXT'
                }
            ]
                });
            });
</script>