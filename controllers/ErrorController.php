<?php

namespace app\controllers;

use yii\web\Controller;
use yii\web\ErrorAction;

/**
 * Class ErrorController
 *
 * @package app\controllers
 */
class ErrorController extends Controller
{
    public function actions()
    {
        return [
            'index' => [
                'class' => ErrorAction::className(),
            ],
        ];
    }
}