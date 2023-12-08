<?php

use app\models\TblAdministrator;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\TblAdministratorSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'The Administrators';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-administrator-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Add Administrator', ['create'], ['class' => 'btn btn-lg btn-warning']) ?>
    </p>

<?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'No_Pegawai',
            'Nama_Admin',
            'No_Hp',
            'Alamat:ntext',
            'Jabatan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblAdministrator $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'No_Pegawai' => $model->No_Pegawai]);
                 }
            ],
        ],
    ]); ?>

<?php Pjax::end(); ?>

</div>
