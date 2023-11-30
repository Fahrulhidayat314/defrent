<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblAdministrator $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-administrator-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nama_Admin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'No_Hp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Jabatan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
