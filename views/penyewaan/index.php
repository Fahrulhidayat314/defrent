<?php

use app\models\TblPenyewaan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\TblPenyewaanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Rent Your Car';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-penyewaan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Add Rent', ['create'], ['class' => 'btn btn-lg btn-warning']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'No_Sewa',
            'Rencana',
            'tgl_sewa',
            'Tgl_Kembali',
            'Lama_Sewa',
            'NoPegawai.No_Pegawai',
            //'No_SIM',
            'Mobil.Id_Mobil',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblPenyewaan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'No_Sewa' => $model->No_Sewa]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
