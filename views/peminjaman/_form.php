<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\Peminjaman $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="peminjaman-form">

    <?php $form = ActiveForm::begin(); ?>
<br>
    <?= $form->field($model, 'tanggal_pinjam')->textInput() ?>
<br>
    <?= $form->field($model, 'tanggal_kembali')->textInput() ?>
<br>
    <?php //= $form->field($model, 'id_buku')->textInput() ?>
<br>
    <?php //= $form->field($model, 'id_anggota')->textInput() ?>
<br>
    <?php
       $dataPost=ArrayHelper::map(\app\models\Buku::find()->asArray()->all(), 'id', 'judul');
        echo $form->field($model, 'id_buku')
        ->dropDownList(
            $dataPost,
            ['id_buku' => 'peminjaman']
        )->label('Judul');
    ?>
<br>
    <?php
       $dataPost=ArrayHelper::map(\app\models\Anggota::find()->asArray()->all(), 'id', 'nama');
        echo $form->field($model, 'id_anggota')
        ->dropDownList(
            $dataPost,
            ['id_anggota' => 'peminjaman']
        )->label('nama');
    ?>
<br>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
