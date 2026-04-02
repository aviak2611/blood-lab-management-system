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
                    <h2 class="mb-2 page-title">User Report</h2>
                    <table id="example" class="table table-striped datatables">
                        <thead class="">
                            <tr>
                                <th>Customer Id</th>
                                <th>Customer Name</th>
                                <th>Customer Mail</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Mobile</th>
                                <th>City</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $showempstable = "select * from custdesc";
                            $showempstablerun = mysqli_query($con, $showempstable);
                            while ($result = mysqli_fetch_array($showempstablerun)) {
                            ?>
                                <tr>
                                    <td><?php echo $result[1]; ?></td>
                                    <td><?php echo $result[2]." ".$result[3]; ?></td>
                                    <td><?php echo $result[4]; ?></td>
                                    <td><?php echo $result[5]; ?></td>
                                    <td><?php echo $result[6]; ?></td>
                                    <td><?php echo $result[7]; ?></td>
                                    <td><?php echo $result[8]; ?></td>
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
                    title: 'UserReportExcel'
                },
                {
                    extend: 'pdfHtml5',
                    title: 'UserReportPdf'
                },
                {
                    extend: 'csvHtml5',
                    title: 'UserReportCSV'
                },
                {
                    extend:'copyHtml5',
                    title: 'UserReportTXT'
                }
            ]
                });
            });
        </script>
    </body>
</body>

</html>