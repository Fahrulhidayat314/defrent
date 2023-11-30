<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblJenisMobil $model */

$this->title = 'Update Tbl Jenis Mobil: ' . $model->No_Jenis;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Jenis Mobils', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->No_Jenis, 'url' => ['view', 'No_Jenis' => $model->No_Jenis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-jenis-mobil-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
