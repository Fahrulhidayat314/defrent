<?php

namespace app\controllers;

class ViewMobilController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
