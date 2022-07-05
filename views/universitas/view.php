<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Universitas */

$this->title = $model->id_universitas;
$this->params['breadcrumbs'][] = ['label' => 'Universitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="universitas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_universitas' => $model->id_universitas], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_universitas' => $model->id_universitas], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_universitas',
            'universitas',
            'id_fakultas',
            'id_jurusan',
            'id_dosen',
            'id_mahasiswa',
        ],
    ]) ?>

</div>
