<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblFeedback $model */

$this->title = 'Update Tbl Feedback: ' . $model->No_Feedback;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Feedbacks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->No_Feedback, 'url' => ['view', 'No_Feedback' => $model->No_Feedback]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-feedback-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
