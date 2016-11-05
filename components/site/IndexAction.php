<?php

namespace app\components\site;

use yii\base\Action;

/**
 * Class IndexAction
 *
 * @package app\components\site
 */
class IndexAction extends Action
{
    public function run()
    {
        return $this->controller->render( 'index' );
    }
}