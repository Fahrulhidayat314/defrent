<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblAturan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-aturan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Aturan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Denda')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
