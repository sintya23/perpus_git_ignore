<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Buku $model */

$this->title = 'Create Buku';
$this->params['breadcrumbs'][] = ['label' => 'Buku', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buku-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
