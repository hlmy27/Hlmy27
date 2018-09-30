<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\md\models\Lembaga */

$this->title = 'Create Lembaga';
$this->params['breadcrumbs'][] = ['label' => 'Lembagas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lembaga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
