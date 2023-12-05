<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblPenyewaan $model */

$this->title = 'Create Tbl Penyewaan';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Penyewaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-penyewaan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
