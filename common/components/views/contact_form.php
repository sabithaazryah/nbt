<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<section class="in-main-help-you"><!--in-main-help-you-->
        <div class="container">
                <div class="head-cont"><small>Fill in the form below, and we'll </small>
                        <h2>get back to you within <b>24 hours.</b></h2></div>
                <div class="row">
                        <div class="col-lg-4 box-cont">
                                <div class="cont">
                                        <h2><small>How May </small>I Help You ?</h2>
                                         <ul>
                                                <li>Skype : <?= $contat_details->skype ?></li>
                                                <li> Email: <?= $contat_details->email ?></li>
                                                <li>Phone No: <?= $contat_details->phone1 ?></li>
                                        </ul>
                                </div>
                        </div>
                        <div class="col-lg-8 form-box">
                                <div class="main-form">
                                        <?= common\widgets\Alert::widget() ?>
                                         <?php $form = ActiveForm::begin(['action' => ['site/enquiry'], 'options' => ['class' => 'in-main-form']]); ?>
                                        <div class="row">
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                                <?= $form->field($model, 'name')->textInput(['placeholder' => 'Name'])->label(FALSE) ?>
                                                        </div>
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                                <?= $form->field($model, 'website_url')->textInput(['placeholder' => 'Website URL'])->label(FALSE) ?>
                                                        </div>
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                                <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email'])->label(FALSE) ?>
                                                        </div>
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                                <?= $form->field($model, 'phone')->textInput(['placeholder' => 'Phone No'])->label(FALSE) ?>
                                                        </div>
                                                </div>
                                                <div class="col-md-12">
                                                        <div class="form-group">
                                                                <?= $form->field($model, 'message')->textArea(['placeholder' => 'Message'])->label(FALSE) ?>
                                                        </div>
                                                </div>
                                                <div class="col-md-12">
                                                        <div class="form-group">
                                                                <center><input name="" type="submit" value="Send Request!" class="submit"></center>
                                                        </div>
                                                </div>
                                        </div>
                                        <?php ActiveForm::end(); ?>
                                </div>
                        </div>
                </div>
        </div>
</section><!--in-main-help-you-->