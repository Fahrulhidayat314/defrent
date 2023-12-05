<?php

use app\models\TblJenisMobil;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\TblJenisMobilSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tbl Jenis Mobils';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-jenis-mobil-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Add Cars Add', ['create'], ['class' => 'btn btn-lg btn-warning']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'label'=> 'Id Jenis',
                'headerOptions'=> ['class'=>'text-center'],
                'value'=>function($model){
                    return $model->No_Jenis;
                }
            ],
            [
                'label'=> 'Tipe Mobil',
                'headerOptions'=> ['class'=>'text-center'],
                'value'=>function($model){
                    return $model->Jenis_Mobil;
                }
            ],
            [
                'label'=> 'Jumlah Kursi',
                'headerOptions'=> ['style'=>'width:100px','class'=>'text-center'],
                'value'=>function($model){
                    return $model->Jumlah_Kursi;
                }
            ],
           
            /*'No_Jenis',
            'Jenis_Mobil',
            'Jumlah_Kursi',*/
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblJenisMobil $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'No_Jenis' => $model->No_Jenis]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
