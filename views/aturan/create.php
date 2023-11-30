<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblAturan $model */

$this->title = 'Create Tbl Aturan';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Aturans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-aturan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
