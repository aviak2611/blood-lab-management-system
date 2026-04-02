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

<body>

    <body class="vertical  light  ">
        <div class="wrapper">
            <?php
            include 'header.php';
            ?>
            <main role="main" class="main-content">
                <div class="container-fluid">
                    <div class="card-header">
                        <strong class="card-title">Test Wise Report</strong>
                    </div>
                    <div class="card-body shadow">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="simple-select2">Select Test</label>
                                <select class="form-control select2" id="simple-select2">
                                    <option value=""></option>
                                    <?php
                                    $showtest = "select * from testinfo";
                                    $showtestquery = mysqli_query($con, $showtest);
                                    while ($showtestfetch = mysqli_fetch_array($showtestquery)) {
                                    ?>
                                        <option value="<?php echo $showtestfetch[1] ?>"><?php echo $showtestfetch[1] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-body shadow mt-2" id="datewisetable">

                    </div>
            </main>
        </div>
        <?php
        include 'footer.php'
        ?>
        <script>
            $('.select2').select2({
                theme: 'bootstrap4',
            });
        </script>
        <script>
            $(function() {
                $("#simple-select2").change(function() {
                    var dropdownvalue = $("#simple-select2").val();
                    // alert(dropdownvalue);
                    $.ajax({
                        type: "POST",
                        url: "testwise.php",
                        data: {
                            testvalue:dropdownvalue
                        },
                        success: function(data) {
                            $("#datewisetable").html(data);
                        }
                    });
                });

            });
        </script>
    </body>
</body>

</html>