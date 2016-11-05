<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register( $this );
?>
<?php $this->beginPage(); ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language; ?>">
    <head>
        <meta charset="<?= Yii::$app->charset; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags(); ?>
        <title><?= Html::encode( $this->title ); ?></title>
        <?php $this->head(); ?>
    </head>
    <body>
    <?php $this->beginBody(); ?>

    <div class="container">
        <div class="header clearfix">
            <nav>
                <ul class="nav nav-pills pull-right">
                    <li role="presentation"><a href="<?= \yii\helpers\Url::home(); ?>">Home</a></li>
                    <li role="presentation"><a href="<?= \yii\helpers\Url::toRoute( 'site/about' ); ?>">About</a></li>
                </ul>
            </nav>
            <h3 class="text-muted">Yii2 Minimal</h3>
        </div>

        <?= $content; ?>

        <footer class="footer">
            <p>&copy; <?= date( 'Y' ); ?> Company, Inc.</p>
        </footer>
    </div>

    <?php $this->endBody(); ?>
    </body>
    </html>
<?php $this->endPage(); ?>