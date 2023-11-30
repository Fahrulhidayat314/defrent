<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TblAturan $model */

$this->title = $model->No_Aturan;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Aturans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-aturan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'No_Aturan' => $model->No_Aturan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'No_Aturan' => $model->No_Aturan], [
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
            'No_Aturan',
            'Aturan',
            'Denda',
        ],
    ]) ?>

</div>
