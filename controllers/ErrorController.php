<?php

namespace app\controllers;

use yii\web\Controller;

/**
 * Class ErrorController
 *
 * @package app\controllers
 */
class ErrorController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'index' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
}