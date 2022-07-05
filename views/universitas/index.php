<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UniversitasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Universitas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="universitas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Universitas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_universitas',
            'universitas',
            'id_fakultas',
            'id_jurusan',
            'id_dosen',
            'id_mahasiswa',
            'jurusan.jurusan',
            'jurusan.mata_kuliah',
            'fakultas.fakultas',
            'dosen.dosen',
            'mahasiswa.nama',
            'mahasiswa.nim',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_universitas' => $model->id_universitas]);
                 }
            ],
        ],
    ]); ?>


</div>
