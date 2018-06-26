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
                                <h2 style="text-align: center;margin-bottom: 0px">APPOINTMENT</h2>
                                <table style="margin: 0 auto" >

                                        <tr>
                                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;">Name </td>
                                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;">:</td>
                                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;"><?= $model->name ?> </td>
                                        </tr>

                                        <tr>
                                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;">Email </td>
                                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;">:</td>
                                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;"><?= $model->email ?></td>
                                        </tr>

                                        <tr>
                                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;">Mobile No </td>
                                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;">:</td>
                                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;"><?= $model->mobile_no ?></td>
                                        </tr>
                                        <?php
                                        if (isset($model->category) && $model->category != '') {
                                                if ($model->category == 1) {
                                                        $category = 'Individual';
                                                } else if ($model->category == 2) {
                                                        $category = 'Corporate';
                                                } else {
                                                        $category = '';
                                                }
                                                ?>

                                                <tr>
                                                        <td style="padding-top: 1.5em;padding-bottom: 1.5em;">Category </td>
                                                        <td style="padding-top: 1.5em;padding-bottom: 1.5em;">:</td>
                                                        <td style="padding-top: 1.5em;padding-bottom: 1.5em;"><?= $category ?></td>
                                                </tr>

                                        <?php } ?>

                                        <?php
                                        if (isset($model->vehicle_manufacturer) && $model->vehicle_manufacturer != '') {
                                                ?>
                                                <tr>
                                                        <td style="padding-top: 1.5em;padding-bottom: 1.5em;">Vehicle Manufacturer </td>
                                                        <td style="padding-top: 1.5em;padding-bottom: 1.5em;">:</td>
                                                        <td style="padding-top: 1.5em;padding-bottom: 1.5em;"><?= $model->vehicle_manufacturer ?></td>
                                                </tr>
                                        <?php }
                                        ?>

                                        <?php
                                        if (isset($model->vehicle_date) && $model->vehicle_date != '') {
                                                ?>
                                                <tr>
                                                        <td style="padding-top: 1.5em;padding-bottom: 1.5em;">Date </td>
                                                        <td style="padding-top: 1.5em;padding-bottom: 1.5em;">:</td>
                                                        <td style="padding-top: 1.5em;padding-bottom: 1.5em;"><?= date('d-m-Y', strtotime($model->vehicle_date)) ?></td>
                                                </tr>
                                        <?php }
                                        ?>

                                        <tr>
                                                <td style = "padding-top: 1.5em;padding-bottom: 1.5em;">Comments </td>
                                                <td style = "padding-top: 1.5em;padding-bottom: 1.5em;">:</td>
                                                <td style = "padding-top: 1.5em;padding-bottom: 1.5em;width: 500px;word-wrap: break-word;"><?= $model->comments ?></td>
                                        </tr>


                                </table>

                        </div>
                </div>
        </body>
</html>
