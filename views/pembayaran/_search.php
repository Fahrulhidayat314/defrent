<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblPembayaranSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-pembayaran-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'No_Transaksi') ?>

    <?= $form->field($model, 'Tanggal') ?>

    <?= $form->field($model, 'Total_Harga') ?>

    <?= $form->field($model, 'Metode_Pembayaran') ?>

    <?= $form->field($model, 'No_Sewa') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
