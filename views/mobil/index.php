<?php

use app\models\TblMobil;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TblMobilSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tbl Mobils';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-mobil-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbl Mobil', ['create'], ['class' => 'btn btn-lg btn-warning']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'label'=> 'Id Mobil',
                'headerOptions'=> ['style'=>'width:150px','class'=>'text-center'],
                'value'=>function($model){
                    return $model->Id_Mobil;
                }
            ],
            [
                'label'=> 'Plat Nomor',
                'headerOptions'=> ['style'=>'width:120px', 'class'=>'text-center'],
                'value'=>function($model){
                    return $model->Plat_No;
                }
            ],
            [
                'label'=> 'Merk',
                'headerOptions'=> ['class'=>'text-center'],
                'value'=>function($model){
                    return $model->Merk;
                }
            ],
            [
                'label'=> 'Harga',
                'headerOptions'=> ['class'=>'text-center'],
                'value'=>function($model){
                    return $model->harga_sewa;
                }
            ],
            /*'Id_Mobil',
            'Plat_No',
            'No_Seri',
            'Merk',
            'Status',
            'harga_sewa',
            'Lokasi',
            'No_Jenis',*/
            'TblJenisMobils.No_Jenis',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblMobil $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Id_Mobil' => $model->Id_Mobil]);
                 }
            ],
        ],
    ]); ?>


</div>
