<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblFeedback $model */

$this->title = 'Create Tbl Feedback';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Feedbacks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-feedback-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
