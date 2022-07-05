<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FakultasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fakultas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fakultas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Fakultas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_fakultas',
            'fakultas',
            'prodi',
            'id_jurusan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Fakultas $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_fakultas' => $model->id_fakultas]);
                 }
            ],
        ],
    ]); ?>


</div>
