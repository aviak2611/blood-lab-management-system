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
                    <h2 class="mb-2 page-title">Employee Report</h2>
                    <table id="example" class="table table-striped datatables">
                        <thead class="">
                            <tr>
                                <th>Employee Id</th>
                                <th>Employee Name</th>
                                <th>Employee Mail</th>
                                <th>Role</th>
                                <th>Joining Date</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $showempstable = "select * from m_employee";
                            $showempstablerun = mysqli_query($con, $showempstable);
                            while ($result = mysqli_fetch_array($showempstablerun)) {
                            ?>
                                <tr>
                                    <td><?php echo $result['empid']; ?></td>
                                    <td><?php echo $result['empname']; ?></td>
                                    <td><?php echo $result['empemail']; ?></td>
                                    <td><?php echo $result['emprole']; ?></td>
                                    <td><?php echo $result['empjoindate']; ?></td>
                                    <?php
                                    if ($result['empactive'] == 'Active') {
                                    ?>
                                        <td><span class="badge badge-pill badge-success">Active</span></td>
                                    <?php
                                    } else {
                                    ?>
                                        <td><span class="badge badge-pill badge-danger">Not Active</span></td>
                                    <?php
                                    }
                                    ?>
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
                    // buttons: [
                    //     'copyHtml5',
                    //     'excelHtml5',
                    //     'csvHtml5',
                    //     'pdfHtml5'
                    // ]
                    buttons: [
                {
                    extend: 'excelHtml5',
                    title: 'EmployeeReportExcel'
                },
                {
                    extend: 'pdfHtml5',
                    title: 'EmployeeReportPdf'
                },
                {
                    extend: 'csvHtml5',
                    title: 'EmployeeReportCSV'
                },
                {
                    extend:'copyHtml5',
                    title: 'EmployeeReportTXT'
                }
            ]
                });
            });
        </script>
    </body>
</body>

</html>