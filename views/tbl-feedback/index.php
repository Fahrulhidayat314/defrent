<?php

use app\models\TblFeedback;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\TblFeedbackSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Your Feedbacks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-feedback-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Add Your Feedback', ['create'], ['class' => 'btn btn-lg btn-warning']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'No_Feedback',
            'mobil.Merk',
            'noSIM.Nama_User',
            'Rating',
            'Komentar',
            'Tanggal',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblFeedback $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'No_Feedback' => $model->No_Feedback]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
