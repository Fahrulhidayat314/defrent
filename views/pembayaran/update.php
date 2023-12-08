<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblPembayaran $model */

$this->title = 'Update Tbl Pembayaran: ' . $model->No_Transaksi;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Pembayarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->No_Transaksi, 'url' => ['view', 'No_Transaksi' => $model->No_Transaksi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-pembayaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
