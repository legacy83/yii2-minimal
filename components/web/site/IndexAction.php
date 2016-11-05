<?php

namespace app\components\web\site;

use yii\base\Action;

/**
 * Class IndexAction
 *
 * @package app\components\web\site
 */
class IndexAction extends Action
{
    public function run()
    {
        return $this->controller->render( 'index' );
    }
}