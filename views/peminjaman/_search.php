<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PeminjamanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="peminjaman-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tanggal_pinjam') ?>

    <?= $form->field($model, 'tanggal_kembali') ?>

    <?= $form->field($model, 'id_buku') ?>

    <?= $form->field($model, 'id_anggota') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
