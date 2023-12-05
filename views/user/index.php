<?php

use app\models\TblUser;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\TblUserSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pengguna';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Add User', ['create'], ['class' => 'btn btn-lg btn-warning']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'label'=> 'Nomor SIM',
                'headerOptions'=> ['style'=>'width:150px','class'=>'text-center'],
                'value'=>function($model){
                    return $model->No_SIM;
                }
            ],
            [
                'label'=> 'Nama',
                'headerOptions'=> ['style'=>'width:150px', 'class'=>'text-center'],
                'value'=>function($model){
                    return $model->Nama_User;
                }
            ],
            [
                'label'=> 'No. HP',
                'headerOptions'=> ['class'=>'text-center'],
                'value'=>function($model){
                    return $model->No_Hp;
                }
            ],
            [
                'label'=> 'Alamat',
                'headerOptions'=> ['class'=>'text-center'],
                'value'=>function($model){
                    return $model->Alamat;
                }
            ],
            /*'No_SIM',
            'Nama_User',
            'No_Hp',
            'Alamat:ntext',*/
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblUser $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'No_SIM' => $model->No_SIM]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
