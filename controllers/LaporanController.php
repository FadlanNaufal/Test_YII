<?php

namespace app\controllers;
use Yii;
use app\models\Pasien;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class LaporanController extends \yii\web\Controller
{
    public function actionFilter()
    {
        return $this->render('filter');
    }

    public function actionToday()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Pasien::find()->where(['created_at' => Date('y-m-d')]),
        ]);
        

        return $this->render('today', [
            'dataProvider' => $dataProvider,
        ]);
    }

}
