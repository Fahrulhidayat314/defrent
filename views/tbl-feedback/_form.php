<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\TblFeedback $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-feedback-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    echo $form->field($model, 'Rating')->dropDownList(
        ['1' => '1⭐', '2' => '2⭐', '3' => '3⭐', '4' => '4⭐', '5' => '5⭐',]
); ?>

    <?= $form->field($model, 'Komentar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tanggal')->textInput() ?>

    <?php 
    $dataPost=ArrayHelper::map(\app\models\TblMobil::find()
    ->asArray()->all(), 'Id_Mobil', 'Merk');
        echo $form->field($model, 'Id_Mobil')
            ->dropDownList($dataPost,
                ['Id_Mobil'=>'Merk']);
?>

    <?php 
    $dataPost=ArrayHelper::map(\app\models\TblUser::find()
    ->asArray()->all(), 'No_SIM', 'Nama_User');
        echo $form->field($model, 'No_SIM')
            ->dropDownList($dataPost,
                ['No_SIM'=>'Nama_User']);
?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-warning']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
