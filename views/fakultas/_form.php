<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Fakultas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fakultas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_fakultas')->textInput() ?>

    <?= $form->field($model, 'fakultas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prodi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_jurusan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
