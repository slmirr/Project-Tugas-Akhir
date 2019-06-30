<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PenyalurPenerima */

$this->title = 'Update Penyalur Penerima: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Penyalur Penerimas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penyalur-penerima-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
