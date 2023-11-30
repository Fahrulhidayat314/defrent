<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TblJenisMobil $model */

$this->title = $model->No_Jenis;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Jenis Mobils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-jenis-mobil-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'No_Jenis' => $model->No_Jenis], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'No_Jenis' => $model->No_Jenis], [
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
            'No_Jenis',
            'Jenis_Mobil',
            'Jumlah_Kursi',
        ],
    ]) ?>

</div>
