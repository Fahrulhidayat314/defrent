<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TblPenyewaan $model */

$this->title = $model->No_Sewa;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Penyewaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-penyewaan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'No_Sewa' => $model->No_Sewa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'No_Sewa' => $model->No_Sewa], [
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
            'No_Sewa',
            'Rencana',
            'tgl_sewa',
            'Tgl_Kembali',
            'Lama_Sewa',
            'No_Pegawai',
            'No_SIM',
            'Id_Mobil',
        ],
    ]) ?>

</div>
