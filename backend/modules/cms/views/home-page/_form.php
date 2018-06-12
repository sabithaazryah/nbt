<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\HomePage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="home-page-form form-inline">

    <?= common\widgets\Alert::widget()?>
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>   
            <?=
            $form->field($model, 'what_we_do', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>

        </div><div class='col-md-12 col-sm-12 col-xs-12 left_padd'>    <?=
            $form->field($model, 'service_1', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>

        </div><div class='col-md-12 col-sm-12 col-xs-12 left_padd'>    <?=
            $form->field($model, 'service_2', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>


        </div><div class='col-md-12 col-sm-12 col-xs-12 left_padd'>    <?=
            $form->field($model, 'service_3', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>


        </div><div class='col-md-12 col-sm-12 col-xs-12 left_padd'>    <?=
            $form->field($model, 'service_4', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>


        </div><div class='col-md-12 col-sm-12 col-xs-12 left_padd'>    <?=
            $form->field($model, 'service_5', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>


        </div><div class='col-md-12 col-sm-12 col-xs-12 left_padd'>    <?=
            $form->field($model, 'service_6', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>


        </div><div class='col-md-12 col-sm-12 col-xs-12 left_padd'>    <?=
            $form->field($model, 'who_we_are', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>

        </div>        
    </div>
    <div class="row">
        <div class='col-md-4 col-sm-6 col-xs-12' >
            <div class="form-group" >
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
