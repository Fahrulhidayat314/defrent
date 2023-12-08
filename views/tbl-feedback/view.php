<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TblFeedback $model */

$this->title = $model->No_Feedback;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Feedbacks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-feedback-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'No_Feedback' => $model->No_Feedback], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'No_Feedback' => $model->No_Feedback], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'No_Feedback',
            'Rating',
            'Komentar',
            'Tanggal',
            'Id_Mobil',
            'No_SIM',
        ],
    ]) ?>

</div>
