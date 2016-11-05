<?php

namespace app\controllers;

use app\actions\SiteAboutAction;
use app\actions\SiteIndexAction;
use yii\web\Controller;
use yii\web\ErrorAction;

/**
 * Class SiteController
 *
 * @package app\controllers
 */
class SiteController extends Controller
{
    public function actions()
    {
        return [
            'index' => [ 'class' => SiteIndexAction::className(), ],
            'about' => [ 'class' => SiteAboutAction::className(), ],
            'error' => [ 'class' => ErrorAction::className(), ],
        ];
    }
}