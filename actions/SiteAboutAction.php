<?php

namespace app\actions;

use yii\base\Action;

/**
 * Class SiteAboutAction
 *
 * @package app\actions
 */
class SiteAboutAction extends Action
{
    public function run()
    {
        return $this->controller->render( 'about' );
    }
}