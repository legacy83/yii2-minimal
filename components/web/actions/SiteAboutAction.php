<?php

namespace app\components\web\actions;

use yii\base\Action;

/**
 * Class SiteAboutAction
 *
 * @package app\components\web\actions
 */
class SiteAboutAction extends Action
{
    public function run()
    {
        return $this->controller->render( 'about' );
    }
}