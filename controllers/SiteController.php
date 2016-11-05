<?php

namespace app\controllers;

use app\components\site\AboutAction;
use app\components\site\IndexAction;
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