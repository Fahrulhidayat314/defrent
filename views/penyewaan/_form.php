<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblPenyewaan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-penyewaan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Rencana')->textInput() ?>

    <?= $form->field($model, 'tgl_sewa')->textInput() ?>

    <?= $form->field($model, 'Tgl_Kembali')->textInput() ?>

    <?= $form->field($model, 'Lama_Sewa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'No_Pegawai')->textInput() ?>

    <?= $form->field($model, 'No_SIM')->textInput() ?>

    <?= $form->field($model, 'Id_Mobil')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
