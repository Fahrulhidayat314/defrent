<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PelanggaranSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-pelanggaran-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'No_Pelanggaran') ?>

    <?= $form->field($model, 'Denda') ?>

    <?= $form->field($model, 'Tanggal') ?>

    <?= $form->field($model, 'No_Aturan') ?>

    <?= $form->field($model, 'No_Sewa') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
