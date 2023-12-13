<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\bootstrap5\Modal;
// use kartik\form\ActiveForm;
// use kartik\date\DatePicker;

/** @var yii\web\View $this */
/** @var app\models\TblPenyewaan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-penyewaan-form">

    <?php $form = ActiveForm::begin(); ?>

<?php
    echo $form->field($model, 'Rencana')->dropDownList(
            ['0' => '1 Hari', '1' => '2 Hari', '2' => '3 Hari', '3' => '4 Hari', 
            '4' => '5 Hari', '5' => '6 Hari', '6' => '7 Hari', '7' => '8 Hari' , '8' => '9 Hari', '9' => '10 Hari', '10' => '<10 Hari',]
    ); ?>

<?= $form->field($model, 'tgl_sewa')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => 'Enter birth date ...'],
    'pluginOptions' => [
        'autoclose' => true
    ]
]);?>

    <?= $form->field($model, 'Tgl_Kembali')->textInput() ?>

    <?php
    echo $form->field($model, 'Lama_Sewa')->dropDownList(
        ['0' => '1 Hari', '1' => '2 Hari', '2' => '3 Hari', '3' => '4 Hari', 
        '4' => '5 Hari', '5' => '6 Hari', '6' => '7 Hari', '7' => '8 Hari' , '8' => '9 Hari', '9' => '10 Hari', '10' => '<10 Hari',]
); ?>

    <?php 
    $dataPost=ArrayHelper::map(\app\models\TblAdministrator::find()
    ->asArray()->all(), 'No_Pegawai', 'Nama_Admin');
	echo $form->field($model, 'No_Pegawai')
        ->dropDownList($dataPost,           
            ['No_Pegawai'=>'Nama_Admin']
        );
    ?>

    <?php 
    $dataPost=ArrayHelper::map(\app\models\TblUser::find()
    ->asArray()->all(), 'No_SIM', 'Nama_User');
	echo $form->field($model, 'No_SIM')
        ->dropDownList($dataPost,           
            ['No_SIM'=>'Nama_User']
        );
    ?>

    <?php 
    $dataPost=ArrayHelper::map(\app\models\TblMobil::find()
    ->asArray()->all(), 'Id_Mobil', 'Merk');
	echo $form->field($model, 'Id_Mobil')
        ->dropDownList($dataPost,           
            ['Id_Mobil'=>'Merk']
        );
    ?>

    <div class="form-group">
        <div class="row">
            <div class="col-sm-offset-2 col-sm-10">
                <?= Html::submitButton('Next', ['class' => 'btn btn-warning']) ?>
                <a class="btn btn-warning" href="http://localhost/basic/web/index.php?r=penyewaan">Save</a>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
