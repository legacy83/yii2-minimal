<?php

namespace app\components\actions;

use yii\base\Action;

/**
 * Class SiteIndexAction
 *
 * @package app\components\actions
 */
class SiteIndexAction extends Action
{
    public function run()
    {
        return $this->controller->render( 'index' );
    }
}