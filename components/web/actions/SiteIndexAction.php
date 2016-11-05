<?php

namespace app\components\web\actions;

use yii\base\Action;

/**
 * Class SiteIndexAction
 *
 * @package app\components\web\actions
 */
class SiteIndexAction extends Action
{
    public function run()
    {
        return $this->controller->render( 'index' );
    }
}