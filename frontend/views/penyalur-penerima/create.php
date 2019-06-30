<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PenyalurPenerima */

$this->title = 'Create Penyalur Penerima';
$this->params['breadcrumbs'][] = ['label' => 'Penyalur Penerimas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penyalur-penerima-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
