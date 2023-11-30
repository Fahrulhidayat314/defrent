<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblAturan $model */

$this->title = 'Update Tbl Aturan: ' . $model->No_Aturan;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Aturans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->No_Aturan, 'url' => ['view', 'No_Aturan' => $model->No_Aturan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-aturan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
