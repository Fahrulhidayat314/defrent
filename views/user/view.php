<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TblUser $model */

$this->title = $model->No_SIM;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'No_SIM' => $model->No_SIM], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'No_SIM' => $model->No_SIM], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'No_SIM',
            'Nama_User',
            'No_Hp',
            'Alamat:ntext',
        ],
    ]) ?>

</div>
