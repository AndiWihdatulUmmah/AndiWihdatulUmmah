<?php

namespace app\controllers;

use app\models\Jurusan;
use app\models\JurusanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JurusanController implements the CRUD actions for Jurusan model.
 */
class JurusanController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Jurusan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new JurusanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Jurusan model.
     * @param int $id_jurusan Id Jurusan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_jurusan)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_jurusan),
        ]);
    }

    /**
     * Creates a new Jurusan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Jurusan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_jurusan' => $model->id_jurusan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Jurusan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_jurusan Id Jurusan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_jurusan)
    {
        $model = $this->findModel($id_jurusan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_jurusan' => $model->id_jurusan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Jurusan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_jurusan Id Jurusan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_jurusan)
    {
        $this->findModel($id_jurusan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Jurusan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_jurusan Id Jurusan
     * @return Jurusan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_jurusan)
    {
        if (($model = Jurusan::findOne(['id_jurusan' => $id_jurusan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
