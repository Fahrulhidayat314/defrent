<?php

namespace app\controllers;

use app\models\TblPenyewaan;
use app\models\TblPenyewaanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PenyewaanController implements the CRUD actions for TblPenyewaan model.
 */
class PenyewaanController extends Controller
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
     * Lists all TblPenyewaan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TblPenyewaanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblPenyewaan model.
     * @param int $No_Sewa No Sewa
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($No_Sewa)
    {
        return $this->render('view', [
            'model' => $this->findModel($No_Sewa),
        ]);
    }

    /**
     * Creates a new TblPenyewaan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TblPenyewaan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'No_Sewa' => $model->No_Sewa]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TblPenyewaan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $No_Sewa No Sewa
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($No_Sewa)
    {
        $model = $this->findModel($No_Sewa);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'No_Sewa' => $model->No_Sewa]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TblPenyewaan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $No_Sewa No Sewa
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($No_Sewa)
    {
        $this->findModel($No_Sewa)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblPenyewaan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $No_Sewa No Sewa
     * @return TblPenyewaan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($No_Sewa)
    {
        if (($model = TblPenyewaan::findOne(['No_Sewa' => $No_Sewa])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
