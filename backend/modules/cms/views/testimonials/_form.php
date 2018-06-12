<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\Testimonials */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="testimonials-form form-inline">

        <?php $form = ActiveForm::begin(); ?>
        <div class="row">
                <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'link')->textInput(['maxlength' => true])->label('Designation') ?>

                </div> <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'rating')->textInput()->label('Rating (Choose a number from 1 to 5)') ?>

                </div> <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>     <?=
                        $form->field($model, 'content', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                            'options' => ['rows' => 2],
                            'preset' => 'custom',
                        ])
                        ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 70x70 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
                        <?php
                        if ($model->isNewRecord)
                                echo "";
                        else {
                                if (!empty($model->image)) {
                                        ?>

                                        <img src="<?= Yii::$app->homeUrl ?>../uploads/testimonials/<?= $model->id ?>/small.<?= $model->image; ?>" width="125" height="100"/>
                                        <?php
                                }
                        }
                        ?>
                </div> </div>

        <div class="row">
                <div class='col-md-4 col-sm-6 col-xs-12' >
                        <div class="form-group">
                                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'style' => 'margin-top:10px']) ?>
                        </div>
                </div>
        </div>

        <?php ActiveForm::end(); ?>

</div>


<script>
        $(document).ready(function () {
                $('#test-markeing').hide();
                $('#testimonials-type').change(function () {
                        if ($(this).val() == '2') {
                                $('#test-markeing').show();
                        } else {
                                $('#test-markeing').hide();
                        }
                });

                var type = $('#testimonials-type').val();
                if (type == 1) {
                        $('#test-markeing').hide();
                } else {
                        $('#test-markeing').show();
                }
        });
</script>