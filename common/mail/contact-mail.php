<?php

use yii\helpers\Html;

/* @var $this \yii\web\View view component instance */
/* @var $message \yii\mail\MessageInterface the message being composed */
/* @var $content string main view render result */
?>
<div class="content" style="margin-left: 40px;">
        <h2 style="text-align: center;margin-bottom: 0px">ENQUIRY</h2>
        <table style="margin: 0 auto" >
                <?php
                if ($model->portfolio != '') {
                        $platform = common\models\Platforms::findOne($model->portfolio);
                        ?>
                        <tr>
                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;">Request a demo for (Plarform) </td>
                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;">:</td>
                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;"><?= $platform->title ?></td>
                        </tr>
                <?php } ?>
                <tr>
                        <td style="padding-top: 1.5em;padding-bottom: 1.5em;">Name </td>
                        <td style="padding-top: 1.5em;padding-bottom: 1.5em;">:</td>
                        <td style="padding-top: 1.5em;padding-bottom: 1.5em;"><?= $model->name ?></td>
                </tr>
                <?php if ($model->last_name != '') { ?>
                        <tr>
                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;">Last Name </td>
                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;">:</td>
                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;"><?= $model->last_name ?></td>
                        </tr>
                <?php } ?>
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
                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;">Website Url </td>
                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;">:</td>
                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;"><?= $model->website_url ?></td>
                        </tr>
                <?php } ?>

                <?php if ($model->company_name != '') { ?>
                        <tr>
                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;">Company Name </td>
                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;">:</td>
                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;"><?= $model->company_name ?></td>
                        </tr>
                <?php } ?>

                <?php if ($model->country != '') { ?>
                        <tr>
                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;">Country </td>
                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;">:</td>
                                <td style="padding-top: 1.5em;padding-bottom: 1.5em;"><?= $model->country ?></td>
                        </tr>
                <?php } ?>

                <tr>
                        <td style="padding-top: 1.5em;padding-bottom: 1.5em;">Message </td>
                        <td style="padding-top: 1.5em;padding-bottom: 1.5em;">:</td>
                        <td style="padding-top: 1.5em;padding-bottom: 1.5em;width: 500px;word-wrap: break-word;"><?= $model->message ?></td>
                </tr>



        </table>

</div>
