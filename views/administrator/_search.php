<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblAdministratorSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-administrator-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'No_Pegawai') ?>

    <?= $form->field($model, 'Nama_Admin') ?>

    <?= $form->field($model, 'No_Hp') ?>

    <?= $form->field($model, 'Alamat') ?>

    <?= $form->field($model, 'Jabatan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
