<?php

use app\models\TblAturan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\TblAturanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tbl Aturans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-aturan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Aadd Rules', ['create'], ['class' => 'btn btn-lg btn-warning']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'label'=> 'ID Aturan',
                'headerOptions'=> ['class'=>'text-center'],
                'value'=>function($model){
                    return $model->No_Aturan;
                }
            ],
            [
                'label'=> 'Isi Aturan',
                'headerOptions'=> ['style'=>'width:800px','class'=>'text-center'],
                'value'=>function($model){
                    return $model->Aturan;
                }
            ],
            [
                'label'=> 'Denda',
                'headerOptions'=> ['class'=>'text-center'],
                'value'=>function($model){
                    return $model->Denda;
                }
            ],
            /*'No_Aturan',
            'Aturan',
            'Denda',*/
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblAturan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'No_Aturan' => $model->No_Aturan]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
