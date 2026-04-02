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
    .dataTables_filter {
        display: flex;
        justify-content: flex-end;
        margin-right: 0;
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
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <h2 class="mb-2 page-title"><span><img src="icons/rupee.svg" alt="" style="height: 40px;"> </span>Billing Report</h2>
                            <!-- <p class="card-text">DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, built upon the foundations of progressive enhancement, that adds all of these advanced features to any HTML table. </p> -->
                            <div class="row my-4">
                                <!-- Small table -->
                                <div class="col-md-12">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <!-- table -->
                                            <table class="table datatables" id="dataTable-1">
                                                <thead>
                                                    <tr>
                                                        <th>Bill Id</th>
                                                        <th>Transaction Id</th>
                                                        <th>Customer Name</th>
                                                        <th>Bill Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> <!-- simple table -->
                            </div> <!-- end section -->
                        </div> <!-- .col-12 -->
                    </div> <!-- .row -->
                </div> <!-- .container-fluid -->
            </main>
        </div>
        <?php
        include 'footer.php'
        ?>
        <script>
            $('#dataTable-1').DataTable({
                autoWidth: true,
                "lengthMenu": [
                    [16, 32, 64, -1],
                    [16, 32, 64, "All"]
                ],

            });
           
        </script>
    </body>

</html>