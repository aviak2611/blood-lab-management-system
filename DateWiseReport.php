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
                    <div class="card mb-4 col-md-3">
                        <div class="card-header">
                            <strong class="card-title">Date Wise Report</strong>
                        </div>
                        <div class="card-body shadow">
                            <form action="booktestadmin.php" method="POST" class="form-inline mr-auto searchform text-muted">
                                <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 w-100" id="daterange" name="searchmob" autofocus="autofocus">
                            </form>
                            <form action="">
                                <div class="form-row mt-2">
                                    <div class="col-md-6">
                                        <input class="form-control w-100" id="startdate" type="hidden">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control w-100" id="enddate" type="hidden">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body shadow mt-2" id="daterangetable">

                    </div>
                </div>
            </main>
        </div>
        <?php
        include 'footer.php'
        ?>
    </body>
    <script>
        $('#daterange').flatpickr({
            mode: "range",
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
            allowInput: true,
            defaultDate: "today",
            onClose: function(selectedDates, dateStr, instance) {
                var dateStart = instance.formatDate(selectedDates[0], "Y-m-d");
                var dateEnd = instance.formatDate(selectedDates[1], "Y-m-d");

                // console.log(dateStart)
                // console.log(dateEnd)
                $("#startdate").val(dateStart);
                $("#enddate").val(dateEnd);
            }
        });
    </script>
    <script>
        $(function() {
            $("#daterange").change(function() {
                var startdate = $("#startdate").val();
                var enddate = $("#enddate").val();
                console.log(startdate)
                console.log(enddate)
                // alert(startdate);
                // alert(enddate); 

                $.ajax({
                    type: "POST",
                    url: "daterange.php",
                    data: {
                        dateStart: startdate,
                        dateEnd : enddate
                    },
                    success: function(data) {
                       $("#daterangetable").html(data);
                    }
                });
            });

        });
    </script>

</html>