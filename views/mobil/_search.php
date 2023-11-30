<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblMobilSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-mobil-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_Mobil') ?>

    <?= $form->field($model, 'Plat_No') ?>

    <?= $form->field($model, 'No_Seri') ?>

    <?= $form->field($model, 'Merk') ?>

    <?= $form->field($model, 'Status') ?>

    <?php // echo $form->field($model, 'harga_sewa') ?>

    <?php // echo $form->field($model, 'Lokasi') ?>

    <?php // echo $form->field($model, 'No_Jenis') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
