<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblPelanggaran $model */

$this->title = 'Create Tbl Pelanggaran';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Pelanggarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-pelanggaran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
