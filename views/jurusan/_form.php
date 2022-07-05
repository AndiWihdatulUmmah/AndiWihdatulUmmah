<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Jurusan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jurusan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jurusan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mata_kuliah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_dosen')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
