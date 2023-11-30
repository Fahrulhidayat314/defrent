<?php

namespace app\controllers;

use app\models\TblAturan;
use app\models\TblAturanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AturanController implements the CRUD actions for TblAturan model.
 */
class AturanController extends Controller
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
     * Lists all TblAturan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TblAturanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblAturan model.
     * @param int $No_Aturan No Aturan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($No_Aturan)
    {
        return $this->render('view', [
            'model' => $this->findModel($No_Aturan),
        ]);
    }

    /**
     * Creates a new TblAturan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TblAturan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'No_Aturan' => $model->No_Aturan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TblAturan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $No_Aturan No Aturan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($No_Aturan)
    {
        $model = $this->findModel($No_Aturan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'No_Aturan' => $model->No_Aturan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TblAturan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $No_Aturan No Aturan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($No_Aturan)
    {
        $this->findModel($No_Aturan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblAturan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $No_Aturan No Aturan
     * @return TblAturan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($No_Aturan)
    {
        if (($model = TblAturan::findOne(['No_Aturan' => $No_Aturan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
