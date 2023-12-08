<?php

namespace app\controllers;

use app\models\TblFeedback;
use app\models\TblFeedbackSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TblFeedbackController implements the CRUD actions for TblFeedback model.
 */
class TblFeedbackController extends Controller
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
     * Lists all TblFeedback models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TblFeedbackSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblFeedback model.
     * @param int $No_Feedback No Feedback
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($No_Feedback)
    {
        return $this->render('view', [
            'model' => $this->findModel($No_Feedback),
        ]);
    }

    /**
     * Creates a new TblFeedback model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TblFeedback();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'No_Feedback' => $model->No_Feedback]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TblFeedback model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $No_Feedback No Feedback
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($No_Feedback)
    {
        $model = $this->findModel($No_Feedback);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'No_Feedback' => $model->No_Feedback]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TblFeedback model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $No_Feedback No Feedback
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($No_Feedback)
    {
        $this->findModel($No_Feedback)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblFeedback model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $No_Feedback No Feedback
     * @return TblFeedback the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($No_Feedback)
    {
        if (($model = TblFeedback::findOne(['No_Feedback' => $No_Feedback])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
