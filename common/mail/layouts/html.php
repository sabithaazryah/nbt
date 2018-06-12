<?php

use yii\helpers\Html;

/* @var $this \yii\web\View view component instance */
/* @var $message \yii\mail\MessageInterface the message being composed */
/* @var $content string main view render result */
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=<?= Yii::$app->charset ?>" />
                <title><?= Html::encode($this->title) ?></title>
                <?php $this->head() ?>
        </head>

        <body>
                <?php $this->beginBody() ?>
                <div style="border: 1px solid #ccc;width: 100%;margin: auto;">
                        <div class="image" style="margin: auto">
                                <img src="http://<?= Yii::$app->request->serverName ?>/images/logo.png" style=" display: block;margin: 0 auto;">
                        </div>
                        <?= $content ?>
                </div>
                <?php $this->endBody() ?>
        </body>
</html>
<?php $this->endPage() ?>
