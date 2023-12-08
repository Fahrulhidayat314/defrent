<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblPembayaran $model */

$this->title = 'Create Tbl Pembayaran';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Pembayarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-pembayaran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
