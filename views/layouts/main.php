<?php

/* @var $this \yii\web\View */
/* @var $content string */

\yii\web\YiiAsset::register( $this );
\app\components\assets\BowerAsset::register( $this );
\app\components\assets\AppAsset::register( $this );
?>

<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language; ?>">
<head>
    <meta charset="<?= Yii::$app->charset; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= \yii\helpers\Html::csrfMetaTags(); ?>
    <title><?= \yii\helpers\Html::encode( $this->title ); ?></title>
    <?php $this->head(); ?>
</head>
<body>
<?php $this->beginBody(); ?>

<div class="container">
    <div class="header clearfix">
        <nav>
            <?= \yii\widgets\Menu::widget( [
                'options' => [ 'class' => 'nav nav-pills pull-right' ],
                'items' => [
                    [ 'label' => 'Home', 'url' => [ 'site/index' ] ],
                    [ 'label' => 'About', 'url' => [ 'site/about' ] ],
                ],
            ] ); ?>
        </nav>
        <h3 class="text-muted">
            <?= \yii\helpers\Html::a( 'Yii2 Minimal', \yii\helpers\Url::home() ); ?>
        </h3>
    </div>

    <?= $content; ?>

    <footer class="footer">
        <p>&copy; <?= date( 'Y' ); ?> Untitled, Inc.</p>
    </footer>
</div>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>