<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ContactAddress */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contact-address-form form-inline">
        <?= common\widgets\Alert::widget() ?>
        <?php $form = ActiveForm::begin(); ?>
        <div class="row">

                <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
                        <?= $form->field($model, 'get_in_touch')->textarea(['maxlength' => true, 'rows' => 2]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                        <?= $form->field($model, 'address')->textarea(['maxlength' => true]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                        <?= $form->field($model, 'phone1')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
                        <?= $form->field($model, 'map')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
                        <?= $form->field($model, 'map_link')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                        <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                        <?= $form->field($model, 'twitter')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                        <?= $form->field($model, 'google_plus')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                        <?= $form->field($model, 'instagram')->textInput(['maxlength' => true]) ?>

                </div>
        </div>
        <div class="row">
                <div class='col-md-12 col-sm-12 col-xs-12'>
                        <div class="form-group">
                                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'style' => 'float:right;']) ?>
                        </div>
                </div>
        </div>
        <?php ActiveForm::end(); ?>

</div>
