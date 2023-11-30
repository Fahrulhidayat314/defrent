<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblUser $model */

$this->title = 'Update Tbl User: ' . $model->No_SIM;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->No_SIM, 'url' => ['view', 'No_SIM' => $model->No_SIM]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
