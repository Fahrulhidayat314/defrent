<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblJenisMobil $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-jenis-mobil-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Jenis_Mobil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Jumlah_Kursi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
