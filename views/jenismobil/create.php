<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblJenisMobil $model */

$this->title = 'Create Tbl Jenis Mobil';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Jenis Mobils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-jenis-mobil-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
