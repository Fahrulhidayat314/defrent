<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblPenyewaan $model */

$this->title = 'Update Tbl Penyewaan: ' . $model->No_Sewa;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Penyewaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->No_Sewa, 'url' => ['view', 'No_Sewa' => $model->No_Sewa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-penyewaan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
