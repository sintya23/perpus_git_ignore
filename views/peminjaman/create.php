<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Peminjaman $model */

$this->title = 'Create Peminjaman';
$this->params['breadcrumbs'][] = ['label' => 'Peminjaman', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjaman-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
