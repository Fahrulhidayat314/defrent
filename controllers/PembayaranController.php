<?php

namespace app\controllers;

use app\models\TblPembayaran;
use app\models\TblPembayaranSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PembayaranController implements the CRUD actions for TblPembayaran model.
 */
class PembayaranController extends Controller
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
     * Lists all TblPembayaran models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TblPembayaranSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblPembayaran model.
     * @param int $No_Transaksi No Transaksi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($No_Transaksi)
    {
        return $this->render('view', [
            'model' => $this->findModel($No_Transaksi),
        ]);
    }

    /**
     * Creates a new TblPembayaran model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TblPembayaran();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'No_Transaksi' => $model->No_Transaksi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TblPembayaran model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $No_Transaksi No Transaksi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($No_Transaksi)
    {
        $model = $this->findModel($No_Transaksi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'No_Transaksi' => $model->No_Transaksi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TblPembayaran model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $No_Transaksi No Transaksi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($No_Transaksi)
    {
        $this->findModel($No_Transaksi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblPembayaran model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $No_Transaksi No Transaksi
     * @return TblPembayaran the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($No_Transaksi)
    {
        if (($model = TblPembayaran::findOne(['No_Transaksi' => $No_Transaksi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
