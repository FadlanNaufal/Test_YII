<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-primary">
                    <div class="panel-body">
                    <?php echo Html::a("Pasien", ["pasien/index"]);?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                 <div class="panel panel-primary">
                    <div class="panel-body">
                    <?php echo Html::a("Dokter", ["dokter/index"]);?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-primary">
                    <div class="panel-body">
                    <?php echo Html::a("Laporan", ["laporan/today"]);?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="panel panel-primary">
                    <div class="panel-body">
                    <?php echo Html::a("Pasien", ["pasien/index"]);?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                 <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="text-center"> Hari ini</h3>
                    </div>
                    <div class="panel-body">
                   <h3 class="text-center"> <?= $today ?> </h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="text-center"> <?php echo Html::a("Total Pasien", ["pasien/index"]);?></h3>
                    </div>
                    <div class="panel-body">
                   <h3 class="text-center"> <?= $pasien ?> </h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="text-center">Total Poli</h3>
                    </div>
                    <div class="panel-body">
                   <h3 class="text-center"> <?= $dokter ?> </h3>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
</div>
