<?php

namespace app\components\site;

use yii\base\Action;

/**
 * Class AboutAction
 *
 * @package app\components\site
 */
class AboutAction extends Action
{
    public function run()
    {
        return $this->controller->render( 'about' );
    }
}