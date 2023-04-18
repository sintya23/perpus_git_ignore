<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Rak $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="rak-form">

    <?php $form = ActiveForm::begin(); ?>
<br>
    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
<br>
    <?= $form->field($model, 'lokasi')->textInput(['maxlength' => true]) ?>
<br>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
<br>
    <?php ActiveForm::end(); ?>

</div>
