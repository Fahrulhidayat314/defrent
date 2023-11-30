<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TblMobil $model */

$this->title = $model->Id_Mobil;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Mobils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-mobil-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Id_Mobil' => $model->Id_Mobil], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Id_Mobil' => $model->Id_Mobil], [
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
            'Id_Mobil',
            'Plat_No',
            'No_Seri',
            'Merk',
            'Status',
            'harga_sewa',
            'Lokasi',
            'No_Jenis',
        ],
    ]) ?>

</div>
