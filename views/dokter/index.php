<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dokters';
$this->params['breadcrumbs'][] = $this->title;
?>
     <?= Html::a('Back to home', ['site/index'], ['class' => 'btn btn-warning']) ?>
<div class="dokter-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dokter', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'password',
            'role',
            'poli',
            //'nama',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
