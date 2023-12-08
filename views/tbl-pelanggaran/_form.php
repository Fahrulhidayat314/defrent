<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblPelanggaran $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-pelanggaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Denda')->textInput() ?>

    <?= $form->field($model, 'Tanggal')->textInput() ?>

    <?= $form->field($model, 'No_Aturan')->textInput() ?>

    <?= $form->field($model, 'No_Sewa')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
