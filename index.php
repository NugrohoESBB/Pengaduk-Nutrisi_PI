<?php
    include "asset/inc/config.php";

    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

    $uri_path = "//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $uri_segments = explode('/', $uri_path);
    $uri_segments[4];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nutrition Mixing System</title>

    <!-- Custom fonts-->
    <link href="asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles-->
    <link href="asset/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/ekko-lightbox.css">
    <link href="asset/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="asset/img/bg_title.png" type="image/x-icon">
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #253542;" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <img src="asset/img/bg_index.png" width="70%" alt="">
                </div>
                <div class="sidebar-brand-text mx-4">Nutrition</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php if ($uri_segments[4] == "index.php") {echo 'active';} ?>">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i><span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">Data</div>

            <!-- Nav Item - Log Data Collapse Menu -->
            <li class="nav-item
            <?php
            if ($uri_segments[4] == "index.php?page=Log_Data") {echo 'active';}
        ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapselaporan" aria-expanded="true" aria-controls="collapselaporan">
            <i class="fas fa-fw fa-chart-line"></i><span>Log Data</span>
        </a>
        <div id="collapselaporan" class="collapse" aria-labelledby="headinglaporan" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Log Data :</h6>
                <a class="collapse-item <?php if ($uri_segments[4] == "index.php?page=Log_Data") {echo 'active';} ?>" href="?page=Log_Data">Log Data</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Calibration Collapse Menu -->
    <li class="nav-item
    <?php
    if ($uri_segments[4] == "index.php?page=Post_Data") {echo 'active';}
?>">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapserencana" aria-expanded="true" aria-controls="collapserencana">
    <i class="fas fa-fw fa-edit"></i><span>Data Calibration</span>
</a>
<div id="collapserencana" class="collapse" aria-labelledby="headingrencana" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Data Calibration :</h6>
        <a class="collapse-item <?php if ($uri_segments[4] == "index.php?page=Post_Data") {echo 'active';} ?>" href="?page=Post_Data">Calibration</a>
    </div>
</div>
</li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <?php include('asset/inc/content.php'); ?>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; NugrohoESBB</a> - <?= date("Y"); ?></span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<!-- Bootstrap core JavaScript-->
<script src="asset/vendor/jquery/jquery.min.js"></script>
<script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="asset/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="asset/js/sb-admin-2.min.js"></script>  
<script src="asset/js/ekko-lightbox.js"></script>
<script src="asset/js/ekko-lightbox.min.js"></script>

<!-- Page level plugins -->
<script src="asset/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="asset/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="asset/js/demo/datatables-demo.js"></script>

<!-- Chart -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables/datatables-simple-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.4.1/dist/chart.min.js" integrity="sha256-GMN9UIJeUeOsn/Uq4xDheGItEeSpI5Hcfp/63GclDZk=" crossorigin="anonymous"></script>


<script>
    /*graph*/
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });

    // Chart Dashboard
    let labeData = "Data Sensor ";
    $(document).ready(function() {
        const nutA = document.getElementById('Anutrisi').getContext('2d');
        const nutAchart = new Chart(nutA, {
            type: 'line',
            data: {
              labels: <?php echo $json_datawaktu; ?>,
              datasets: [{
                label: labeData,
            lineTension:0.2, //0.5
            backgroundColor: "rgba(0, 97, 242, 0.6)", // 0.05
            borderColor: "rgba(0, 97, 242, 1)",
                        fill: true,  //no fill here
                        pointRadius: 3,
                        pointBackgroundColor: "rgba(0, 97, 242, 1)",
                        pointBorderColor: "rgba(0, 97, 242, 1)",
                        pointHoverRadius: 3,
                        pointHoverBackgroundColor: "rgba(0, 97, 242, 1)",
                        pointHoverBorderColor: "rgba(0, 97, 242, 1)",
                        pointHitRadius: 20,
                        pointBorderWidth: 2,
                        data: <?php echo $json_nutrisiA; ?>
                    }]
          },
          options: {
            responsive: true,
            plugins: {
                filler: {
                    propagate: false}
                },
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 20,
                        right: 30,
                        top: 10,
                        bottom: 10
                    }
                },
                scales: {
                    xAxes: [{
                        time: {
                            unit: "time"
                        },
                        gridLines: {
                            display: true,
                            drawBorder: true
                        },
                        ticks: {
                            maxTicksLimit: 20
                        }
                    }],
                    y: {
                        beginAtZero: true
                    }
                },
                legend: {
                    display: false
                },
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    titleMarginBottom: 10,
                    titleFontColor: "#6e707e",
                    titleFontSize: 14,
                    borderColor: "#dddfeb",
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    intersect: false,
                    mode: "index",
                    caretPadding: 20,
                    callbacks: {
                        label: function(tooltipItem, chart) {
                            var datasetLabel =
                            chart.datasets[tooltipItem.datasetIndex].label || "";
                            return datasetLabel + ": $" + number_format(tooltipItem.yLabel);
                        }
                    }
                }
            }
        });

        const nutB = document.getElementById('Bnutrisi').getContext('2d');
        const nutBchart = new Chart(nutB, {
            type: 'line',
            data: {
                labels: <?php echo $json_datawaktu; ?>,
                datasets: [{
                    label: labeData,
            lineTension:0.2, //0.5
            backgroundColor: "rgba(0, 97, 242, 0.6)", // 0.05
            borderColor: "rgba(0, 97, 242, 1)",
                        fill: true,  //no fill herefill here
                        pointRadius: 3,
                        pointBackgroundColor: "rgba(0, 97, 242, 1)",
                        pointBorderColor: "rgba(0, 97, 242, 1)",
                        pointHoverRadius: 3,
                        pointHoverBackgroundColor: "rgba(0, 97, 242, 1)",
                        pointHoverBorderColor: "rgba(0, 97, 242, 1)",
                        pointHitRadius: 10,
                        pointBorderWidth: 2,
                        data: <?= $json_nutrisiB; ?>
                    }]
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        time: {
                            unit: "time"
                        },
                        gridLines: {
                            display: false, 
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        },
                        ticks: {
                            maxTicksLimit: 10
                        }
                    }],
                    y: {
                        beginAtZero: false
                    }
                },
                legend: {
                    display: true
                },
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    titleMarginBottom: 10,
                    titleFontColor: "#6e707e",
                    titleFontSize: 14,
                    borderColor: "#dddfeb",
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    intersect: false,
                    mode: "index",
                    caretPadding: 10,
                    callbacks: {
                        label: function(tooltipItem, chart) {
                            var datasetLabel =
                            chart.datasets[tooltipItem.datasetIndex].label || "";
                            return datasetLabel + ": $" + number_format(tooltipItem.yLabel);
                        }
                    }
                }
            }
        });


        
    });
</script>

</body>
</html>
