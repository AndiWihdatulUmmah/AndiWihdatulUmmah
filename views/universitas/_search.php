<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UniversitasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="universitas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_universitas') ?>

    <?= $form->field($model, 'universitas') ?>

    <?= $form->field($model, 'id_fakultas') ?>

    <?= $form->field($model, 'id_jurusan') ?>

    <?= $form->field($model, 'id_dosen') ?>

    <?php // echo $form->field($model, 'id_mahasiswa') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
