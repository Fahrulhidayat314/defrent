<?php

namespace app\controllers;

use app\models\TblPelanggaran;
use app\models\PelanggaranSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TblPelanggaranController implements the CRUD actions for TblPelanggaran model.
 */
class TblPelanggaranController extends Controller
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
     * Lists all TblPelanggaran models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PelanggaranSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblPelanggaran model.
     * @param int $No_Pelanggaran No Pelanggaran
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($No_Pelanggaran)
    {
        return $this->render('view', [
            'model' => $this->findModel($No_Pelanggaran),
        ]);
    }

    /**
     * Creates a new TblPelanggaran model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TblPelanggaran();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'No_Pelanggaran' => $model->No_Pelanggaran]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TblPelanggaran model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $No_Pelanggaran No Pelanggaran
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($No_Pelanggaran)
    {
        $model = $this->findModel($No_Pelanggaran);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'No_Pelanggaran' => $model->No_Pelanggaran]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TblPelanggaran model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $No_Pelanggaran No Pelanggaran
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($No_Pelanggaran)
    {
        $this->findModel($No_Pelanggaran)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblPelanggaran model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $No_Pelanggaran No Pelanggaran
     * @return TblPelanggaran the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($No_Pelanggaran)
    {
        if (($model = TblPelanggaran::findOne(['No_Pelanggaran' => $No_Pelanggaran])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
