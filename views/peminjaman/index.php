<?php

use app\models\Peminjaman;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PeminjamanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Peminjaman';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjaman-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Peminjaman', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'tanggal_pinjam',
            'tanggal_kembali',
            [
                'attribute' => 'id_buku',
                'value' => 'buku.judul',
            ],
            [
                'attribute' => 'id_anggota',
                'value' => 'anggota.nama'
            ],
            //'id_buku',
            //'id_anggota',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Peminjaman $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
