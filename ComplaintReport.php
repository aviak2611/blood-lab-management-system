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
                    <h2 class="mb-2 page-title">Complaint Report</h2>
                    <table id="example" class="table table-striped datatables">
                        <thead class="">
                            <tr>
                                <th>Customer Id</th>
                                <th>Customer Name</th>
                                <th>Issue Type</th>
                                <th>Complaint</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $showempstable = "SELECT custdesc.ccid,custdesc.cfname,custdesc.clname,issue.issue,issue.message FROM 
                            custdesc INNER JOIN issue on custdesc.ccid=issue.custids;";
                            $showempstablerun = mysqli_query($con, $showempstable);
                            while ($result = mysqli_fetch_array($showempstablerun)) {
                            ?>
                                <tr>
                                    <td><?php echo $result[0]?></td>
                                    <td><?php echo $result[1]." ".$result[2]?></td>
                                    <td><?php echo $result[3]?></td>
                                    <td><?php echo $result[4]?></td>
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
                    title: 'ComplaintReportExcel'
                },
                {
                    extend: 'pdfHtml5',
                    title: 'ComplaintReportPdf'
                },
                {
                    extend: 'csvHtml5',
                    title: 'ComplaintReportCSV'
                },
                {
                    extend:'copyHtml5',
                    title: 'ComplaintReportTXT'
                }
            ]
                });
            });
        </script>
    </body>
</body>

</html>