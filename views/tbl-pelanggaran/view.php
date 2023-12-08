<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TblPelanggaran $model */

$this->title = $model->No_Pelanggaran;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Pelanggarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-pelanggaran-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'No_Pelanggaran' => $model->No_Pelanggaran], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'No_Pelanggaran' => $model->No_Pelanggaran], [
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
            'No_Pelanggaran',
            'Denda',
            'Tanggal',
            'No_Aturan',
            'No_Sewa',
        ],
    ]) ?>

</div>
