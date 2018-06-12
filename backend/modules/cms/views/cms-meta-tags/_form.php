<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CmsMetaTags */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cms-meta-tags-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'page_title')->textInput(['maxlength' => true,'readonly'=>true]) ?>

</div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'meta_title')->textarea(['rows' => 6]) ?>

</div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'meta_description')->textarea(['rows' => 6]) ?>

</div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'meta_keyword')->textarea(['rows' => 6]) ?>

</div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'page_url')->textInput(['maxlength' => true]) ?>

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
