<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BarangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'jumlah') ?>

    <?= $form->field($model, 'satuan') ?>

    <?= $form->field($model, 'kondisi') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <?php // echo $form->field($model, 'id_jenis') ?>

    <?php // echo $form->field($model, 'donatur_id') ?>

    <?php // echo $form->field($model, 'tanggal_terima') ?>

    <?php // echo $form->field($model, 'petugas') ?>

    <?php // echo $form->field($model, 'petugas_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
