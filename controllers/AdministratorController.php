<?php

namespace app\controllers;

use app\models\TblAdministrator;
use app\models\TblAdministratorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AdministratorController implements the CRUD actions for TblAdministrator model.
 */
class AdministratorController extends Controller
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
     * Lists all TblAdministrator models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TblAdministratorSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblAdministrator model.
     * @param int $No_Pegawai No Pegawai
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($No_Pegawai)
    {
        return $this->render('view', [
            'model' => $this->findModel($No_Pegawai),
        ]);
    }

    /**
     * Creates a new TblAdministrator model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TblAdministrator();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'No_Pegawai' => $model->No_Pegawai]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TblAdministrator model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $No_Pegawai No Pegawai
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($No_Pegawai)
    {
        $model = $this->findModel($No_Pegawai);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'No_Pegawai' => $model->No_Pegawai]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TblAdministrator model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $No_Pegawai No Pegawai
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($No_Pegawai)
    {
        $this->findModel($No_Pegawai)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblAdministrator model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $No_Pegawai No Pegawai
     * @return TblAdministrator the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($No_Pegawai)
    {
        if (($model = TblAdministrator::findOne(['No_Pegawai' => $No_Pegawai])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
