<?php

use yii\helpers\Html;

/* @var $this \yii\web\View view component instance */
/* @var $message \yii\mail\MessageInterface the message being composed */
/* @var $content string main view render result */
?>

<html xmlns="http://www.w3.org/1999/xhtml">
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=<?= Yii::$app->charset ?>" />
                <title><?= Html::encode($this->title) ?></title>

        </head>

        <body>
                <div style="border: 1px solid #ccc;width: 100%;margin: auto;">
                        <div class="image" style="margin: auto">
                                <img src="http://<?= Yii::$app->request->serverName ?>/nbt/img/resources/logo.png" style=" display: block;margin: 0 auto;margin-top: 15px;">
                        </div>
                        <div class="content" style="margin-left: 40px;">
                                <h2 style="text-align: center;margin-bottom: 0px">ENQUIRY</h2>
                                <table style="margin: 0 auto" >

                                        <tr>
                                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;">Name </td>
                                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;">:</td>
                                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;"><?= $model->name ?> <?= $model->last_name ?></td>
                                        </tr>

                                        <tr>
                                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;">Email </td>
                                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;">:</td>
                                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;"><?= $model->email ?></td>
                                        </tr>

                                        <tr>
                                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;">Phone </td>
                                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;">:</td>
                                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;"><?= $model->phone ?></td>
                                        </tr>
                                        <?php if ($model->website_url != '') { ?>
                                                <tr>
                                                        <td style="padding-top: 1.5em;padding-bottom: 1.5em;">Subject </td>
                                                        <td style="padding-top: 1.5em;padding-bottom: 1.5em;">:</td>
                                                        <td style="padding-top: 1.5em;padding-bottom: 1.5em;"><?= $model->website_url ?></td>
                                                </tr>
                                        <?php } ?>


                                        <tr>
                                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;">Message </td>
                                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;">:</td>
                                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;width: 500px;word-wrap: break-word;"><?= $model->message ?></td>
                                        </tr>



                                </table>

                        </div>
                </div>
        </body>
</html>
