<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PenyalurPenerimaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penyalur-penerima-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'jumlah') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'foto') ?>

    <?= $form->field($model, 'id_barang') ?>

    <?php // echo $form->field($model, 'id_petugas') ?>

    <?php // echo $form->field($model, 'id_penerima') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
