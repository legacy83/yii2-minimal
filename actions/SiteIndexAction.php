<?php

namespace app\actions;

use yii\base\Action;

/**
 * Class SiteIndexAction
 *
 * @package app\actions
 */
class SiteIndexAction extends Action
{
    public function run()
    {
        return $this->controller->render( 'index' );
    }
}