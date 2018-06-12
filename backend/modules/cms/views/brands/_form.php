<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Brands */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="brands-form form-inline">

        <?php $form = ActiveForm::begin(); ?>
        <div class="row">
                <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'type')->dropDownList(['' => '--Select--', '1' => 'Tyres', '2' => 'Alloy Wheels', '3' => 'Batteries']) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 140x50 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
                        <?php
                        if ($model->isNewRecord)
                                echo "";
                        else {
                                if (!empty($model->image)) {
                                        ?>

                                        <img src="<?= Yii::$app->homeUrl ?>../uploads/brands/<?= $model->id ?>/small.<?= $model->image; ?>" width="125" height="100"/>
                                        <?php
                                }
                        }
                        ?>

                </div>
        </div>
        <div class="row">
                <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'home_page')->dropDownList(['1' => 'Yes', '0' => 'No'])->label('Displays in home page or not') ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'status')->dropDownList(['1' => 'Enabled', '0' => 'Disabled']) ?>

                </div>
        </div>
        <div class="row">
                <div class='col-md-4 col-sm-6 col-xs-12' >
                        <div class="form-group">
                                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                        </div>
                </div>
        </div>

        <?php ActiveForm::end(); ?>

</div>
