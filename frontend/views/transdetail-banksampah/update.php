<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TransdetailBanksampah */

$this->title = 'Update Transdetail Banksampah: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Transdetail Banksampahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transdetail-banksampah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
