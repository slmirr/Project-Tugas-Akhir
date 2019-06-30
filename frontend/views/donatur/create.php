<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Donatur */

$this->title = 'Create Donatur';
$this->params['breadcrumbs'][] = ['label' => 'Donatur', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donatur-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
