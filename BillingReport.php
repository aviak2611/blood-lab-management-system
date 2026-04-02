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
    .badgestyle{
        padding: 10px 20px;
        font-weight: bolder;
        font-size: 13px;
        /* background-color: #f8f8f8;
        color: #529a71; */
    }
    .dt-buttons .dt-button{
        background-color: #3ad29f;
        font-weight: bolder;
    }
    .dt-buttons .dt-button:hover{
        color: #3ad29f;
    }
</style>
<body>

    <body class="vertical  light  ">
        <div class="wrapper">
            <?php
            include 'header.php';
            ?>
            <main role="main" class="main-content">
                <div class="container-fluid">
                <h2 class="mb-2 page-title">Billng Report</h2>
                    <table id="example" class="table datatables text-center">
                        <thead class="">
                            <tr>
                                <th>Serial No</th>
                                <th>Bill Id</th>
                                <th>Customer Name</th>
                                <th>Status</th>
                                <th>Amount</th>
                                <th>Invoice Date</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                include 'backend/connection.php';
                                $showbilling="SELECT booktest.bookid,booktest.bookname,booktest.bookdate,payment.aamount
                                FROM booktest INNER JOIN payment on booktest.bookid=payment.bookids";
                                $showbillingrun=mysqli_query($con,$showbilling);
                                $count=1;
                                while($result=mysqli_fetch_array($showbillingrun)){
                                ?>
                                <tr>
                                    <td><?php echo $count++?></td>
                                    <td><?php echo $result['bookid']?></td>
                                    <td><?php echo $result['bookname']?></td>
                                    <td><span class="badge badgestyle">Accept</span></td>
                                    <td><?php echo $result['aamount']?></td>
                                    <td><?php echo $result['bookdate']?></td>
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
        include 'footer.php'
        ?>
    <script>
            $(document).ready(function() {
                $('#example').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                {
                    extend: 'excelHtml5',
                    title: '<?php echo date('d-m-Y')?>BillingReportExcel'
                },
                {
                    extend: 'pdfHtml5',
                    title: 'BillingReportPdf'
                },
                {
                    extend: 'csvHtml5',
                    title: '<?php echo date('d-m-Y')?>BillingReportCSV'
                },
                {
                    extend:'copyHtml5',
                    title: '<?php echo date('d-m-Y')?> BillingReportTXT'
                }
            ]
                });
            });
        </script>
</body>

</html>