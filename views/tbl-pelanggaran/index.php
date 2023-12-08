<?php

use app\models\TblPelanggaran;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\PelanggaranSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tbl Pelanggarans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-pelanggaran-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbl Pelanggaran', ['create'], ['class' => 'btn btn-lg btn-warning']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'No_Pelanggaran',
            'Denda',
            'Tanggal',
            'No_Aturan',
            'No_Sewa',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblPelanggaran $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'No_Pelanggaran' => $model->No_Pelanggaran]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
