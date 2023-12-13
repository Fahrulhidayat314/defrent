<?php

use app\models\TblPembayaran;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TblPembayaranSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Payment';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-pembayaran-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Add Payment', ['create'], ['class' => 'btn btn-lg btn-warning']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'No_Transaksi',
            'Tanggal',
            'Total_Harga',
            'Metode_Pembayaran',
            'noSewa.mobil.Merk',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblPembayaran $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'No_Transaksi' => $model->No_Transaksi]);
                 }
            ],
        ],
    ]); ?>


</div>
