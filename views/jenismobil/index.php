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

$this->title = 'Cars Type';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-jenis-mobil-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Add Cars Types', ['create'], ['class' => 'btn btn-lg btn-warning']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
           
            'No_Jenis',
            'Jenis_Mobil',
            'Jumlah_Kursi',
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
