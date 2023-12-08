<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblFeedbackSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-feedback-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'No_Feedback') ?>

    <?= $form->field($model, 'Rating') ?>

    <?= $form->field($model, 'Komentar') ?>

    <?= $form->field($model, 'Tanggal') ?>

    <?= $form->field($model, 'Id_Mobil') ?>

    <?php // echo $form->field($model, 'No_SIM') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
