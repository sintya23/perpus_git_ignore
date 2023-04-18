<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\BukuSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="buku-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'kode') ?>

    <?= $form->field($model, 'judul') ?>

    <?= $form->field($model, 'penulis') ?>

    <?= $form->field($model, 'penerbit') ?>

    <?php // echo $form->field($model, 'tahun_terbit') ?>

    <?php // echo $form->field($model, 'id_rak') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
