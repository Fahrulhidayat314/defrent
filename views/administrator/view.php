<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TblAdministrator $model */

$this->title = $model->No_Pegawai;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Administrators', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-administrator-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'No_Pegawai' => $model->No_Pegawai], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'No_Pegawai' => $model->No_Pegawai], [
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
            'No_Pegawai',
            'Nama_Admin',
            'No_Hp',
            'Alamat:ntext',
            'Jabatan',
        ],
    ]) ?>

</div>
