<?php

namespace app\controllers;

use yii\web\Controller;

/**
 * Class AboutController
 *
 * @package app\controllers
 */
class AboutController extends Controller
{
    public function actionIndex()
    {
        return $this->render( 'index' );
    }
}