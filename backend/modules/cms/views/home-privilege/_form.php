<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\HomePrivilege */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="home-privilege-form form-inline">

        <?php $form = ActiveForm::begin(); ?>
        <div class="row">
                <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-8 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'content')->textarea(['maxlength' => true, 'rows' => 4]) ?>

                </div>
        </div>
        <div class="row">
                <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'privilege_1')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'privilege_2')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'privilege_3')->textInput(['maxlength' => true]) ?>

                </div>
        </div>
        <div class="row">
                <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>     <?= $form->field($model, 'image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 470x327 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
                        <?php
                        if ($model->isNewRecord)
                                echo "";
                        else {
                                if (!empty($model->image)) {
                                        ?>

                                        <img src="<?= Yii::$app->homeUrl ?>../uploads/home-privileges/<?= $model->id ?>/small.<?= $model->image; ?>" width="125" height="100"/>
                                        <?php
                                }
                        }
                        ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'alt_tag')->textInput(['maxlength' => true]) ?>

                </div>   </div>

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