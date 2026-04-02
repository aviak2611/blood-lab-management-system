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
                    <h2 class="mb-2 page-title">FeedBack Report</h2>
                    <table id="example" class="table table-striped datatables">
                        <thead class="">
                            <tr>
                               <th>Customer Id</th>
                               <th>Customer Name</th>
                               <th>FeedBack</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $showempstable = "SELECT custdesc.ccid,custdesc.cfname,custdesc.clname,feedback.feedmessage FROM custdesc
                             INNER JOIN feedback on custdesc.ccid=feedback.custids;";
                            $showempstablerun = mysqli_query($con, $showempstable);
                            while ($result = mysqli_fetch_array($showempstablerun)) {
                            ?>
                                <tr>
                                    <td><?php echo $result[0]?></td>
                                    <td><?php echo $result[1]." ".$result[2]?></td>
                                    <td><?php echo $result[3]?></td>
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
                    title: 'FeedbackReportExcel'
                },
                {
                    extend: 'pdfHtml5',
                    title: 'FeedbackReportPdf'
                },
                {
                    extend: 'csvHtml5',
                    title: 'FeedbackReportCSV'
                },
                {
                    extend:'copyHtml5',
                    title: 'FeedbackReportTXT'
                }
            ]
                });
            });
        </script>
    </body>
</body>

</html>