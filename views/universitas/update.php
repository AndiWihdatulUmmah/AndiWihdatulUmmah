<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Universitas */

$this->title = 'Update Universitas: ' . $model->id_universitas;
$this->params['breadcrumbs'][] = ['label' => 'Universitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_universitas, 'url' => ['view', 'id_universitas' => $model->id_universitas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="universitas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
