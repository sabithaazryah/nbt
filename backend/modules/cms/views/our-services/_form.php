<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\OurServices */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="our-services-form form-inline">

        <?php $form = ActiveForm::begin(); ?>
        <div class="row">
                <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-6 col-sm-6 col-xs-12 left_padd'>   <?= $form->field($model, 'status')->dropDownList(['1' => 'Enabled', '0' => 'Disabled']) ?>

                </div>  <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'content')->textarea(['rows' => 8]) ?>

                </div><div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'specifications')->textarea(['rows' => 8])->label('Specification [ Add each point separated with a comma ]') ?>

                </div><div class='col-md-3 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 370x280 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
                        <?php
                        if ($model->isNewRecord)
                                echo "";
                        else {
                                if (!empty($model->image)) {
                                        ?>

                                        <img src="<?= Yii::$app->homeUrl ?>../uploads/our-services/<?= $model->id ?>/small.<?= $model->image; ?>" width="125" height="100"/>
                                        <?php
                                }
                        }
                        ?>

                </div><div class='col-md-3 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'image_alt')->textInput(['maxlength' => true]) ?>

                </div> </div>

        <div class="row">
                <div class='col-md-4 col-sm-6 col-xs-12' >
                        <div class="form-group">
                                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'style' => 'margin-top: 10px;']) ?>
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