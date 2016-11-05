<?php

namespace app\components\web\site;

use yii\base\Action;

/**
 * Class AboutAction
 *
 * @package app\components\web\site
 */
class AboutAction extends Action
{
    public function run()
    {
        return $this->controller->render( 'about' );
    }
}