<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblMobil $model */

$this->title = 'Create Tbl Mobil';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Mobils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-mobil-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
