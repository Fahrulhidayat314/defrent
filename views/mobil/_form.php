<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblMobil $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-mobil-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Plat_No')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'No_Seri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Merk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Status')->dropDownList([ 1 => '1', 2 => '2', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'harga_sewa')->textInput() ?>

    <?= $form->field($model, 'Lokasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'No_Jenis')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
