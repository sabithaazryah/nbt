<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\HomePageOther */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="home-page-other-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'banner_label')->textInput(['maxlength' => true]) ?>

</div><div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'welcome_note')->textInput(['maxlength' => true]) ?>

</div><div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'small_content')->textInput(['maxlength' => true]) ?>

</div><div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'detail_content')->textInput(['maxlength' => true]) ?>

</div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'caption_1')->textInput(['maxlength' => true]) ?>

</div><div class='col-md-8 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'caption_1_detail')->textInput(['maxlength' => true]) ?>

</div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'caption_2')->textInput(['maxlength' => true]) ?>

</div><div class='col-md-8 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'caption_2_detail')->textInput(['maxlength' => true]) ?>

</div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'caption_3')->textInput(['maxlength' => true]) ?>

</div><div class='col-md-8 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'caption_3_detail')->textInput(['maxlength' => true]) ?>

</div><div class='col-md-12 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'footer_content')->textarea(['rows' => 6]) ?>

</div>    </div>

    <div class="row"> 
        <div class='col-md-4 col-sm-6 col-xs-12' >
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
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