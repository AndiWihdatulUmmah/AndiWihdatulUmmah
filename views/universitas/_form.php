<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Universitas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="universitas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'universitas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_fakultas')->textInput() ?>

    <?= $form->field($model, 'id_jurusan')->textInput() ?>

    <?= $form->field($model, 'id_dosen')->textInput() ?>

    <?= $form->field($model, 'id_mahasiswa')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
