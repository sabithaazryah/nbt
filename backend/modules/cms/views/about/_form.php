<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\About */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-form form-inline">
        <?= common\widgets\Alert::widget() ?>
        <?php $form = ActiveForm::begin(); ?>
        <div class="row">
                <div class='col-md-8 col-sm-8 col-xs-12 left_padd'>   <?=
                        $form->field($model, 'content', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                            'options' => ['rows' => 2],
                            'preset' => 'custom',
                        ])
                        ?>

                </div><div class='col-md-4 col-sm-4 col-xs-12 left_padd'>
                        <?= $form->field($model, 'image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 295x270 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
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
                </div>
        </div>

        <div class="row">
                <label>THE WORK CYCLE</label>
        </div>

        <div class="row">
                <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>    <?= $form->field($model, 'work_cycle')->textarea(['rows' => 6]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'work_cycle_1')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-8 col-sm-8 col-xs-12 left_padd'>    <?= $form->field($model, 'work_cycle_1_content')->textarea(['rows' => 6, 'style' => 'height:auto !important']) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'work_cycle_2')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-8 col-sm-8 col-xs-12 left_padd'>    <?= $form->field($model, 'work_cycle_2_content')->textarea(['rows' => 6, 'style' => 'height:auto !important']) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'work_cycle_3')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-8 col-sm-8 col-xs-12 left_padd'>    <?= $form->field($model, 'work_cycle_3_content')->textarea(['rows' => 6, 'style' => 'height:auto !important']) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'work_cycle_4')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-8 col-sm-8 col-xs-12 left_padd'>    <?= $form->field($model, 'work_cycle_4_content')->textarea(['rows' => 6, 'style' => 'height:auto !important']) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'work_cycle_5')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-8 col-sm-8 col-xs-12 left_padd'>    <?= $form->field($model, 'work_cycle_5_content')->textarea(['rows' => 6, 'style' => 'height:auto !important']) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'work_cycle_6')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-8 col-sm-8 col-xs-12 left_padd'>    <?= $form->field($model, 'work_cycle_6_content')->textarea(['rows' => 6, 'style' => 'height:auto !important']) ?>

                </div>        </div>

        <div class="row">
                <div class='col-md-4 col-sm-6 col-xs-12' >
                        <div class="form-group">
                                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'style' => 'margin-top: 18px;']) ?>
                        </div>
                </div>
        </div>
        <?php ActiveForm::end(); ?>

</div>
