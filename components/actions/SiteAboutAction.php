<?php

namespace app\components\actions;

use yii\base\Action;

/**
 * Class SiteAboutAction
 *
 * @package app\components\actions
 */
class SiteAboutAction extends Action
{
    public function run()
    {
        return $this->controller->render( 'about' );
    }
}