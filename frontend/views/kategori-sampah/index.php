<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\md\models\KategoriSampahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kategori Sampahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-sampah-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kategori Sampah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
