<?php

namespace app\controllers;

use app\components\web\site\AboutAction;
use app\components\web\site\IndexAction;
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
            'index' => [ 'class' => IndexAction::className(), ],
            'about' => [ 'class' => AboutAction::className(), ],
            'error' => [ 'class' => ErrorAction::className(), ],
        ];
    }
}