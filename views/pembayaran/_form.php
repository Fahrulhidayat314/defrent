<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblPembayaran $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-pembayaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Tanggal')->textInput() ?>

    <?= $form->field($model, 'Total_Harga')->textInput() ?>

    <?= $form->field($model, 'Metode_Pembayaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'No_Sewa')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
