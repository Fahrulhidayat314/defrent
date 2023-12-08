<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblFeedback $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-feedback-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Rating')->textInput() ?>

    <?= $form->field($model, 'Komentar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tanggal')->textInput() ?>

    <?= $form->field($model, 'Id_Mobil')->textInput() ?>

    <?= $form->field($model, 'No_SIM')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
