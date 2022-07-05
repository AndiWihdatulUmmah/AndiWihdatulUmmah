<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dosen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dosen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_dosen')->textInput() ?>

    <?= $form->field($model, 'dosen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_mahasiswa')->textInput() ?>

    <?= $form->field($model, 'nama_mahasiswa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_jurusan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
