<?php

use app\models\TblMobil;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TblMobilSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pick Your Car';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-mobil-index bg-table-warning">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Add Car', ['create'], ['class' => 'btn btn-lg btn-warning']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'Id_Mobil',
            'Plat_No',
            'No_Seri',
            'Merk',
            'Status',
            'harga_sewa',
            'Lokasi',
            'No_Jenis',
            'tblJenisMobil.Jenis_Mobil',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblMobil $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Id_Mobil' => $model->Id_Mobil]);
                 }
            ],
        ],
    ]); ?>


</div>
