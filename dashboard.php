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
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.js" integrity="sha512-tQYZBKe34uzoeOjY9jr3MX7R/mo7n25vnqbnrkskGr4D6YOoPYSpyafUAzQVjV6xAozAqUFIEFsCO4z8mnVBXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
</head>
<style>
  /* .collapsible {
    height: 500px;
    overflow-y: scroll;
  } */
  .dataTables_paginate .current {
    color: #3ad29f;
  }

  @media screen and (max-width:767px) {
    #bar-chart-horizontal {
      height: 300px;
    }
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
              <div class="row align-items-center mb-2">
                <div class="col">
                  <h2 class="h5 page-title">Welcome!</h2>
                </div>

              </div>
              <!-- widgets -->
              <div class="row">
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow bg-primary text-white">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary-light">
                            <i class="fe fe-16 fe-shopping-bag text-white mb-0"></i>
                          </span>
                        </div>
                        <div class="col pr-0">
                          <p class="small text-muted mb-0">Total Revenue</p>
                          <?php
                          $getRevenue="SELECT SUM(aamount) AS TOTALREVENUE from payment";
                          $getRevenuerun=mysqli_query($con,$getRevenue);
                          while($rws=mysqli_fetch_array($getRevenuerun)){
                          ?>
                          <span class="h3 mb-0 text-white">₹<?php echo $rws['TOTALREVENUE']?></span>
                          <?php
                          }
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-user text-white mb-0"></i>
                          </span>
                        </div>
                        <div class="col pr-0 text-dark">
                          <p class="small text-muted mb-0">Total Employees</p>
                          <?php
                          include 'backend/connection.php';
                          $showempsss = "select * from m_employee";
                          $showempsssres = mysqli_query($con, $showempsss);
                          $showempsssresnum = mysqli_num_rows($showempsssres);
                          // mysqli_close($con);
                          ?>
                          <span class="h3 mb-0"><?php echo $showempsssresnum; ?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-bar-chart text-white mb-0"></i>
                          </span>
                        </div>
                        <div class="col">
                          <p class="small text-muted mb-0">Todays Revenue</p>
                          <div class="row align-items-center no-gutters">
                            <div class="col-auto">
                              <?php
                              $getRevenuetoday="SELECT SUM(aamount) AS TOTALREVENUETODAY from payment";
                              $getRevenuetodayrun=mysqli_query($con,$getRevenuetoday);
                              while($rws=mysqli_fetch_array($getRevenuetodayrun)){
                              ?>
                              <span class="h3 mr-2 mb-0">₹<?php echo $rws['TOTALREVENUETODAY'];?></span>
                              <?php
                              }
                              ?>
                            </div>
                            <div class="col-md-12 col-lg">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-database text-white mb-0"></i>
                          </span>
                        </div>
                        <div class="col">
                          <p class="small text-muted mb-0">Total Available Test</p>
                          <?php
                          include 'backend/connection.php';
                          $showtest = "select * from testinfo";
                          $showtestres = mysqli_query($con, $showtest);
                          $showhosresnum = mysqli_num_rows($showtestres);
                          // mysqli_close($con);
                          ?>
                          <span class="h3 mb-0"><?php echo $showhosresnum ?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- end section -->
              <!-- .row -->
              <div class="row">
                <div class="col-md-4 mb-4">
                  <div class="card shadow">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col">
                          <?php
                          $Showcusts = "select * from custdesc";
                          $Showcustsrun = mysqli_query($con, $Showcusts);
                          $showShowcusts = mysqli_num_rows($Showcustsrun);
                          ?>
                          <span class="h2 mb-0"><?php echo $showShowcusts ?></span>
                          <p class="small text-muted mb-0">Customers</p>
                          <!-- <span class="badge badge-pill badge-warning">+1.5%</span> -->
                        </div>
                        <div class="col-auto">
                          <span class="fe fe-32 fe-users text-muted mb-0"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card shadow">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col">
                          <span class="h2 mb-0">0</span>
                          <p class="small text-muted mb-0">Test Done Today's</p>
                          <!-- <span class="badge badge-pill badge-warning">+1.5%</span> -->
                        </div>
                        <div class="col-auto">
                          <span class="fe fe-32 fe-check text-success mb-0"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card shadow">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col">
                          <span class="h2 mb-0">0</span>
                          <p class="smal  l text-muted mb-0">Today's Scheduled Tests</p>
                          <!-- <span class="badge badge-pill badge-warning">+1.5%</span> -->
                        </div>
                        <div class="col-auto">
                          <span class="fe fe-32 fe-clock text-muted mb-0"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- /.col -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
        <?php
        $showmale = "select * from custdesc where cgender='Male'";
        $showmalerun = mysqli_query($con, $showmale);
        $showmalerunnum = mysqli_num_rows($showmalerun);
        // echo $showmalerunnum;
        $showfemale = "select * from custdesc where cgender='Female'";
        $showfemalerun = mysqli_query($con, $showfemale);
        $showfemalerunnum = mysqli_num_rows($showfemalerun);
        $showmaleper = ((int)$showmalerunnum / $showShowcusts) * 100;
        $showfemaleper = ((int)$showfemalerunnum / $showShowcusts) * 100;
        ?>
        <div class="row container-fluid">
          <div class="col-md-4 align-self-center">
            <div class="card shadow mb-4">
              <div class="card-header clearfix">
                <div class="float-left">
                  <strong class="card-title">Genders</strong>
                  <!-- <a class="float-right small text-muted" href="#!">View all</a> -->
                </div>
                <div class="float-right">
                  <i class="fe fe-16 fe-download text-muted mb-0 btn" id="downloadpie"></i>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12 ">
                    <div id="chart-box">
                      <!-- <div id="donutChartWidget"></div> -->
                      <canvas id="myChart" height="280"></canvas>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="row align-items-center my-3">
                      <div class="col">
                        <strong>Male</strong>
                        <!-- <div class="my-0 text-muted small">Global, Services</div> -->
                      </div>
                      <div class="col-auto">
                        <strong><?php echo ceil((int)$showmaleper) ?>%</strong>
                      </div>
                      <div class="col-3">
                        <div class="progress" style="height: 4px;">
                          <div class="progress-bar" role="progressbar" style="width: <?php echo ceil((int)$showmaleper) ?>%;background-color: #FF7000;" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                    <div class="row align-items-center my-3">
                      <div class="col">
                        <strong>Female</strong>
                        <!-- <div class="my-0 text-muted small">Global, Services</div> -->
                      </div>
                      <div class="col-auto">
                        <strong><?php echo ceil($showfemaleper) ?>%</strong>
                      </div>
                      <div class="col-3">
                        <div class="progress" style="height: 4px;">
                          <div class="progress-bar" role="progressbar" style="width: <?php echo ceil($showfemaleper) ?>%;background-color: #6ECCAF;" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div> <!-- .col-md-12 -->
                </div> <!-- .row -->
              </div> <!-- .card-body -->
            </div> <!-- .card -->
          </div>
          <div class="col-md-8">
            <div class="card shadow">

              <div class="card-header clearfix">
                <div class="float-left">
                  <strong class="card-title">Test Wise Number</strong>
                  <!-- <a class="float-right small text-muted" href="#!">View all</a> -->
                </div>
                <div class="float-right">
                  <i class="fe fe-16 fe-download text-muted mb-0 btn" id="downloadbar"></i>
                </div>
              </div>
              <div class="card-body">
                <!-- <canvas id="barChartjs" width="400" height="290"></canvas> -->
                <canvas id="bar-chart-horizontal" height="157" class="img-fluid"></canvas>
              </div> <!-- /.card-body -->
            </div> <!-- /.card -->
          </div> <!-- /. col -->
        </div>
        <div class="container-fluid">
          <div class="my-4">
            <div class="card shadow">
              <div class="card-header clearfix">
                <div class="float-left">
                  <strong class="card-title">Test Wise Number</strong>
                </div>

                <div class="float-right">
                  <!-- <i class="fe fe-16 fe-filter text-muted mb-0 btn" id="filterdate"></i> -->
                  <div class="input-group">
                    <input type="text" class="form-control drgpicker" id="date-input1" value="<?php echo date('Y-m-d'); ?>" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <div class="input-group-text" id="button-addon-date" style="cursor: pointer;"><span class="fe fe-calendar fe-16"></span></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body collapsible" id="ajaxtable">
                <!-- <h5 class="card-title">Scheduled Test</h5> -->

                <!-- <div class="clearfix">
                  <div class="float-left">
                    <form class="form-inline mr-auto searchform text-muted">
                      <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" id="myInput" autofocus="autofocus" onkeyup="myFunction()" type="search" placeholder="search Users" aria-label="Search">
                    </form>
                  </div>
                  <div class="float-right">
                    <button type="button" class="btn" id="filterbutton"><span class="fe fe-filter fe-16 text-muted"></span></button>
                  </div>
                </div> -->
                <p class="card-text"></p>
                <table class="table table-hover text-center" id="myTable">
                  <thead>
                    <tr>
                      <th>BookId</th>
                      <th>Customer Id</th>
                      <th>Customer Name</th>
                      <th>Customer Mail</th>
                      <th>Mobile Number</th>
                      <!-- <th>City</th> -->
                      <th>Test Name</th>
                      <th>Scheduled date</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $todaysdate = date('Y-m-d');
                    // $shesheduledtest = "select * from schedultest ORDER BY DATE(testdate) DESC ";
                    $shesheduledtest = "select * from schedultest where testdate='$todaysdate'";
                    $shesheduledtestrun = mysqli_query($con, $shesheduledtest);

                    while ($rows = mysqli_fetch_array($shesheduledtestrun)) {
                      $getbookeddate = $rows['testdate'];
                      $gettbookids = $rows['bookid'];
                      $getbookedid = "select bookid from booktest where bookid='$gettbookids'";
                      $getbookedidrun = mysqli_query($con, $getbookedid);
                      $getbookeddate1 = strtotime($getbookeddate);
                      $expdate = date('Y-m-d');
                      $expdate1 = strtotime($expdate);
                    ?>

                      <tr>
                        <td><?php echo $rows['bookid'] ?></td>
                        <td><?php echo $rows['custid'] ?></td>
                        <td><?php echo $rows['bfname'] . " " . $rows['blname'] ?></td>
                        <td><?php echo $rows['bemail'] ?></td>
                        <td><?php echo $rows['bmob'] ?></td>
                        <!-- <td><?php echo $rows[''] ?></td> -->
                        <td><?php echo $rows['testname'] ?></td>
                        <td><?php echo $rows['testdate'] ?></td>
                        <?php
                        if (mysqli_num_rows($getbookedidrun)) {
                        ?>
                          <td><button class="btn btn-success text-white w-100">Booked</button></td>
                        <?php
                        } else if ($getbookeddate1 < $expdate1) {
                        ?>
                          <td><a href="scheduledtest.php?bookid=<?php echo $rows['bookid'] ?>"><button class="btn btn-danger text-white w-100">Rechedule</button></a></td>
                        <?php
                        } else if ($getbookeddate1 > $expdate1) {
                        ?>
                          <td><button class="btn btn-warning text-white w-100" onclick="alert('This Test is Scheduled')">Scheduled</button></td>
                        <?php
                        } else {
                        ?>
                          <td><a href="scheduledtest.php?bookid=<?php echo $rows['bookid'] ?>"><button class="btn btn-primary w-100">Take Test</button></a></td>
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
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="row align-items-center my-4">
              <div class="col">
                <h2 class="h3 mb-0 page-title">Your Employees</h2>
              </div>
            </div>
            <div class="row">
              <!-- ****** -->
              <?php
              include 'backend/connection.php';
              $showemployees = "select * from m_employee";
              $showemployeesrun = mysqli_query($con, $showemployees);
              while ($result = mysqli_fetch_array($showemployeesrun)) {
              ?>
                <div class="col-md-3">
                  <div class="card shadow mb-4">
                    <div class="card-body text-center">
                      <div class="avatar avatar-lg mt-4">
                        <a href="">
                          <img src="icons/employee.svg" alt="..." class="avatar-img rounded-circle">
                        </a>
                      </div>
                      <div class="card-text my-2">
                        <strong class="card-title my-0"><?php echo $result['empname'] ?></strong>
                        <p class="small text-muted mb-0"><?php echo $result['emprole'] ?></p>
                        <p class="small"><span class="badge badge-light text-muted"><?php echo $result['empcity'] ?></span></p>
                      </div>
                    </div> <!-- ./card-text -->
                    <!-- /.card-footer -->
                  </div>
                </div> <!-- .col -->
              <?php
              }
              ?>
              <!-- ********** -->
              <div class="col-md-9">
              </div> <!-- .col -->
            </div> <!-- .row -->
          </div> <!-- .col-12 -->
        </div>
      </main> <!-- main -->
    </div>
    <?php
    include 'footer.php';

    ?>
    <script>
      $(document).ready(function() {
        $('#myTable').DataTable({
          order: [
            [6, 'desc']
          ],

        });
      });
    </script>


    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: ['Male', 'Female'],
          datasets: [{
            label: 'Genders',
            data: [<?php echo $showmalerunnum ?>, <?php echo $showfemalerunnum ?>],
            backgroundColor: [
              // 'rgba(255, 99, 132, 0.5)',
              // 'rgba(54, 162, 235, 0.2)',
              '#FF7000',
              '#6ECCAF'
            ],
            borderColor: [
              '#e6600e',
              '#0ee6d0'
            ],
            borderWidth: 1
          }],

        },
        options: {
          //cutoutPercentage: 40,
          responsive: true,
        }
      });
    </script>

    <?php
    include 'tests/testnumber.php';
    ?>
    <script>
      new Chart(document.getElementById("bar-chart-horizontal"), {
        type: 'horizontalBar',
        data: {
          labels: ["Complete Blood Count", "Kidney Function Test", "Liver Function test", "Diabetes", "Thyroid", "D-dimer test"],

          datasets: [{

            // backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
            // backgroundColor: ['#87CEEB', '#90EE90', '#FFC0CB', '#DDA0DD', '#FFFFE0', '#D3D3D3'],
            backgroundColor: ['#a4036f','#048ba8','#16db93','#efea5a','#f29e4c','#48392a'],
            // data: [100,200,400,50,150,40]
            // data: [<?php echo $showcbcrunnum ?>, <?php echo $showkftrunnum ?>, <?php echo $showlftrunum ?>, <?php echo $showdiarunnum ?>, <?php echo $showThyroidrunnum ?>, <?php echo $showdimerunnum ?>]
            data: [90, 55, 35, 40, 45, 50],
          }],
          borderWidth:2
        },
        options: {
          legend: {
            display: false
          },
          responsive: true,
          title: {
            display: true,
            text: 'Test Wise Numbers'
          },
          scales: {
            xAxes: [{
              ticks: {
                beginAtZero: true,
                max: 100,
                // min:5,

              }
            }]
          }
        }

      });
    </script>
    <script>
      $("#downloadpie").click(function() {
        var canvas = document.getElementById("myChart");
        image = canvas.toDataURL("image/png", 1.0).replace("image/png", "image/octet-stream");
        var link = document.createElement('a');
        link.download = "my-image.png";
        link.href = image;
        link.click();
      });
      $("#downloadbar").click(function() {
        var canvas = document.getElementById("bar-chart-horizontal");
        image = canvas.toDataURL("image/png", 1.0).replace("image/png", "image/octet-stream");
        var link = document.createElement('a');
        link.download = "Test-Wise-Number.png";
        link.href = image;
        link.click();
      });
    </script>
    <script>
      $('#date-input1').flatpickr({
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
        allowInput: true,
        defaultDate: "today"
      });
    </script>
    <script>
        $(function() {
            $("#date-input1").change(function() {
                var dropdownvalue = $("#date-input1").val();
                // alert(dropdownvalue); 
                $.ajax({
                    type: "POST",
                    url: "datewise.php",
                    data: {
                        datevalue: dropdownvalue
                    },
                    success: function(data) {
                       $("#ajaxtable").html(data);
                    }
                });
            });

        });
    </script>
    <script>
</script>
  </body>

</html>