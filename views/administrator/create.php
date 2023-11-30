<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblAdministrator $model */

$this->title = 'Create Tbl Administrator';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Administrators', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-administrator-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
