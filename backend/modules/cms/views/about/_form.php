<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\About */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-form form-inline">
        <?php $form = ActiveForm::begin(); ?>
        <div class="row">

                <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
                        <?= $form->field($model, 'small_content')->textArea(['maxlength' => true, 'rows' => 4]) ?>
                </div><div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
                        <?= $form->field($model, 'detailed_content')->textArea(['maxlength' => true, 'rows' => 8]) ?>
                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'customer_support')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'customer_support_detail')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'customer_support_no')->textInput(['maxlength' => true]) ?>

                </div>


                <div class='col-md-4 col-sm-4 col-xs-12 left_padd'>
                        <?= $form->field($model, 'about_image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 406x264 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
                        <?php
                        if ($model->isNewRecord)
                                echo "";
                        else {
                                if (!empty($model->image)) {
                                        ?>

                                        <img src="<?= Yii::$app->homeUrl ?>../uploads/about/<?= $model->id ?>/small.<?= $model->image; ?>" width="125" height="100"/>
                                        <?php
                                }
                        }
                        ?>
                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'about_image_alt')->textInput(['maxlength' => true]) ?>

                </div>
        </div>

        <div class="row">
                <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
                        <label style="color:#000;font-weight: bold;font-size: 14px;margin-bottom: 20px;">WHY CHOOSE US</label>
                </div>
        </div>

        <div class="row">
                <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'caption_1')->textInput(['maxlength' => true])->label(FALSE) ?>

                </div><div class='col-md-8 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'caption_1_detail')->textInput(['maxlength' => true])->label(FALSE) ?>

                </div> <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'caption_2')->textInput(['maxlength' => true])->label(FALSE) ?>

                </div><div class='col-md-8 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'caption_2_detail')->textInput(['maxlength' => true])->label(FALSE) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'caption_3')->textInput(['maxlength' => true])->label(FALSE) ?>

                </div><div class='col-md-8 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'caption_3_detail')->textInput(['maxlength' => true])->label(FALSE) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'caption_4')->textInput(['maxlength' => true])->label(FALSE) ?>

                </div><div class='col-md-8 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'caption_4_detail')->textInput(['maxlength' => true])->label(FALSE) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'caption_5')->textInput(['maxlength' => true])->label(FALSE) ?>

                </div><div class='col-md-8 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'caption_5_detail')->textInput(['maxlength' => true])->label(FALSE) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'caption_6')->textInput(['maxlength' => true])->label(FALSE) ?>

                </div><div class='col-md-8 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'caption_6_detail')->textInput(['maxlength' => true])->label(FALSE) ?>

                </div>

                <div class='col-md-12 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'working_time')->textarea(['maxlength' => true, 'rows' => 6]) ?>

                </div>
        </div>

        <div class="row">
                <div class='col-md-4 col-sm-6 col-xs-12' >
                        <div class="form-group">
                                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'style' => 'margin-top: 18px;']) ?>
                        </div>
                </div>
        </div>
        <?php ActiveForm::end(); ?>

</div>


<style>
        form .form-group textarea{
                height:auto !important;
        }
</style>