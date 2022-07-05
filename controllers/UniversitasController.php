<?php

namespace app\controllers;

use app\models\Universitas;
use app\models\UniversitasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UniversitasController implements the CRUD actions for Universitas model.
 */
class UniversitasController extends Controller
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
     * Lists all Universitas models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UniversitasSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Universitas model.
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
     * Creates a new Universitas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Universitas();

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
     * Updates an existing Universitas model.
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
     * Deletes an existing Universitas model.
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
     * Finds the Universitas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_universitas Id Universitas
     * @return Universitas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_universitas)
    {
        if (($model = Universitas::findOne(['id_universitas' => $id_universitas])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
