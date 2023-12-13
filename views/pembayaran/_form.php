<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\TblPembayaran $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-pembayaran-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row col-4 md"><?= $form->field($model, 'Tanggal')->textInput() ?></div>
    

    <?= $form->field($model, 'Total_Harga')->textInput(['Rp.']); ?>

<?php 
    $dataPost=ArrayHelper::map(\app\models\TblPembayaran::find()
    ->asArray()->all(), 'Metode_Pembayaran', 'Metode_Pembayaran');
        echo $form->field($model, 'Metode_Pembayaran')
            ->dropDownList($dataPost,
                ['Metode_Pembayaran'=>'Metode_Pembayaran']);
?>

<?php 
    $dataPost=ArrayHelper::map(\app\models\TblPenyewaan::find()
    ->asArray()->all(), 'No_Sewa', 'No_Sewa');
        echo $form->field($model, 'No_Sewa')
            ->dropDownList($dataPost,
                ['No_Sewa'=>'No_Sewa']);
?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-warning']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
