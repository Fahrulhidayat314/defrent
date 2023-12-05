<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblPenyewaanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-penyewaan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'No_Sewa') ?>

    <?= $form->field($model, 'Rencana') ?>

    <?= $form->field($model, 'tgl_sewa') ?>

    <?= $form->field($model, 'Tgl_Kembali') ?>

    <?= $form->field($model, 'Lama_Sewa') ?>

    <?php // echo $form->field($model, 'No_Pegawai') ?>

    <?php // echo $form->field($model, 'No_SIM') ?>

    <?php // echo $form->field($model, 'Id_Mobil') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
