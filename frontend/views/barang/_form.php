<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Barang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'satuan')->dropDownList([ 'pcs' => 'Pcs', 'kg' => 'Kg', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kondisi')->dropDownList([ 'baru' => 'Baru', 'lama' => 'Lama', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'foto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_jenis')->textInput() ?>

    <?= $form->field($model, 'tanggal_terima')->textInput() ?>

    <?= $form->field($model, 'petugas')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
