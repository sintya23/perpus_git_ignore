<?php

use app\models\Rak;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\RakSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Rak';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rak-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rak', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nama',
            'lokasi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Rak $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
