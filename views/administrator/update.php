<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblAdministrator $model */

$this->title = 'Update Tbl Administrator: ' . $model->No_Pegawai;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Administrators', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->No_Pegawai, 'url' => ['view', 'No_Pegawai' => $model->No_Pegawai]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-administrator-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
