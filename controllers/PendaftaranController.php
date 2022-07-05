<?php

namespace app\controllers;

use app\models\Pendaftaran;
use app\models\PendaftaranSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PendaftaranController implements the CRUD actions for Pendaftaran model.
 */
class PendaftaranController extends Controller
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
     * Lists all Pendaftaran models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PendaftaranSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pendaftaran model.
     * @param int $id_universitas Id Universitas
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_universitas)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_universitas),
        ]);
    }

    /**
     * Creates a new Pendaftaran model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Pendaftaran();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_universitas' => $model->id_universitas]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pendaftaran model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_universitas Id Universitas
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_universitas)
    {
        $model = $this->findModel($id_universitas);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_universitas' => $model->id_universitas]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pendaftaran model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_universitas Id Universitas
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_universitas)
    {
        $this->findModel($id_universitas)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pendaftaran model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_universitas Id Universitas
     * @return Pendaftaran the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_universitas)
    {
        if (($model = Pendaftaran::findOne(['id_universitas' => $id_universitas])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
