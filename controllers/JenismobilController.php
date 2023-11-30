<?php

namespace app\controllers;

use app\models\TblJenisMobil;
use app\models\TblJenisMobilSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JenismobilController implements the CRUD actions for TblJenisMobil model.
 */
class JenismobilController extends Controller
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
     * Lists all TblJenisMobil models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TblJenisMobilSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblJenisMobil model.
     * @param int $No_Jenis No Jenis
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($No_Jenis)
    {
        return $this->render('view', [
            'model' => $this->findModel($No_Jenis),
        ]);
    }

    /**
     * Creates a new TblJenisMobil model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TblJenisMobil();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'No_Jenis' => $model->No_Jenis]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TblJenisMobil model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $No_Jenis No Jenis
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($No_Jenis)
    {
        $model = $this->findModel($No_Jenis);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'No_Jenis' => $model->No_Jenis]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TblJenisMobil model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $No_Jenis No Jenis
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($No_Jenis)
    {
        $this->findModel($No_Jenis)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblJenisMobil model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $No_Jenis No Jenis
     * @return TblJenisMobil the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($No_Jenis)
    {
        if (($model = TblJenisMobil::findOne(['No_Jenis' => $No_Jenis])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
