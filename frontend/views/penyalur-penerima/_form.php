<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PenyalurPenerima */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penyalur-penerima-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'jumlah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'foto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_barang')->textInput() ?>

    <?= $form->field($model, 'id_petugas')->textInput() ?>

    <?= $form->field($model, 'id_penerima')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
