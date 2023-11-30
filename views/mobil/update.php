<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblMobil $model */

$this->title = 'Update Tbl Mobil: ' . $model->Id_Mobil;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Mobils', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Mobil, 'url' => ['view', 'Id_Mobil' => $model->Id_Mobil]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-mobil-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
