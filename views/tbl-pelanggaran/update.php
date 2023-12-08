<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblPelanggaran $model */

$this->title = 'Update Tbl Pelanggaran: ' . $model->No_Pelanggaran;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Pelanggarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->No_Pelanggaran, 'url' => ['view', 'No_Pelanggaran' => $model->No_Pelanggaran]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-pelanggaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
