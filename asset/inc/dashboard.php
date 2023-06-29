<?php
    require "asset/inc/config.php";
    require 'page/dataNutrisi/nutrisi_a.php';
    require 'page/dataNutrisi/nutrisi_b.php';
    require 'page/dataNutrisi/dataywaktu.php';
    
    // Time
    date_default_timezone_set('Asia/Jakarta');
    $timeZone = date('H:i:s');
?>

<style>
    .card>.card-header+.list-group,
    .card>.list-group+.card-footer {
        border-top: 0;
    }
    .card-footer {
        padding: 1rem 1.35rem;
        background-color: rgba(33, 40, 50, 0.01);
        border-top: 1px solid rgba(33, 40, 50, 0.125);
    }
    @media (min-width: 576px) {
        .card-group>.card:not(:last-child) .card-img-bottom,
        .card-group>.card:not(:last-child) .card-footer {
            border-bottom-right-radius: 0;
        }
        .card-group>.card:not(:first-child) .card-img-bottom,
        .card-group>.card:not(:first-child) .card-footer {
            border-bottom-left-radius: 0;
        }
    }
    .card.bg-dark .card-header,
    .card.bg-dark .card-footer {
        border-color: rgba(255, 255, 255, 0.15);
    }
</style>


<div class="jumbotron">
    <h3 class="display-6">Selamat datang</h3>
    <!-- <p class="line-break margin-top-10"></p> -->
    <hr class="my-4">

    <div class="container-xl px-4 mt-n10">
        <!-- update frequency chart-->
        <!-- <div class="card mb-4">
                            <div class="card-header">Update Frequency</div>
                            <div class="card-body">
                                <div class="chart-area"><canvas id="updateFrequencyChart" width="100%" height="30"></canvas></div>
                            </div>
                            <div class="card-footer small text-muted">Updated today at <?php echo (date("H:i:s", time())); ?> </div>
                        </div> -->
        <div class="row">
            <div class="col-xl-12 mb-4">
                <div class="card card-collapsable">
                    <a class="card-header" href="#collapseCardExampleAccelZ" data-bs-toggle="collapse" role="button"
                    aria-expanded="true" aria-controls="collapseCardExampleAccelZ">Nutrisi A</a>
                    <div class="collapse show" id="collapseCardExampleAccelZ">
                        <div class="container-fuild">
                            <div class="row">
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="Anutrisi" width="100%" height="40"></canvas>
                                    </div>
                                </div>
                                <div class="card-footer large text-muted">Updated today at : <?= $timeZone; ?>
                             
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 mb-4">
                <div class="card card-collapsable">
                    <a class="card-header" href="#collapseCardExampleGyroX" data-bs-toggle="collapse" role="button"
                    aria-expanded="true" aria-controls="collapseCardExampleGyroX">Nutrisi B</a>
                    <div class="collapse show" id="collapseCardExampleGyroX">
                        <div class="container-fuild">
                            <div class="row">
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="Bnutrisi" width="100%" height="40"></canvas>
                                    </div>
                                </div>
                                <div class="card-footer large text-muted">Updated today at : <?= $timeZone; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

    <hr class="my-4">
    <p><?php echo date("d/m/Y"); ?></p>
</div>

