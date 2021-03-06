<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\md\models\Nasabah */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Nasabahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nasabah-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            //'id',
            'nomor',
            'user_id',
            'nama_lengkap',
            'hp',
            'alamat',
            'rt',
            'rw',
            'kelurahan_id',
            //'created_by',
            //'updated_by',
            //'created_at',
            //'updated_at',
            'saldo',
        ],
    ]) ?>

</div>
