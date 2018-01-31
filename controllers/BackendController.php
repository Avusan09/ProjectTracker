<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;

class BackendController extends \yii\web\Controller
{



    public function actionIndex()
    {

        if (Yii::$app->user->can('admin'))
        {
            return $this->render('index');

        }
        elseif (Yii::$app->user->can('evaluator'))
        {
            return $this->render('index');

        }
        else
        {
            throw new ForbiddenHttpException();

        }}



}