<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\Buku $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="buku-form">

    <?php $form = ActiveForm::begin(); ?>
<br>
    <?= $form->field($model, 'kode')->textInput(['maxlength' => true]) ?>
<br>
    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>
<br>
    <?= $form->field($model, 'penulis')->textInput(['maxlength' => true]) ?>
<br>
    <?= $form->field($model, 'penerbit')->textInput(['maxlength' => true]) ?>
<br>
    <?= $form->field($model, 'tahun_terbit')->textInput() ?>
<br>
    <?php //= $form->field($model, 'id_rak')->textInput() ?>
<br>
    <?php
    $dataPost = ArrayHelper::map(\app\models\Rak::find()->asArray()->all(), 'id', 'nama');
    echo $form->field($model, 'id_rak')
        ->dropDownList(
            $dataPost,
            ['id_rak' => 'rak']
        )->label('Rak');
    ?>
<br>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
