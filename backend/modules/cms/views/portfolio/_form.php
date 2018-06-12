<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\Portfolio */
/* @var $form yii\widgets\ActiveForm */
$services = common\models\Services::find()->all();
?>

<div class="portfolio-form form-inline">

        <?php $form = ActiveForm::begin(); ?>
        <div class="row">

                <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'page')->dropDownList(['1' => 'Portfolio Page', '2' => 'Services Page']) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd' id='port_type'>    <?= $form->field($model, 'type')->dropDownList(['' => '--Select--', '1' => 'Web Design', '2' => 'Branding Designs', '3' => 'Brochure Designing', '4' => 'Social Media']) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd' id='port_service'>    <?= $form->field($model, 'service')->dropDownList(\yii\helpers\ArrayHelper::map($services, 'id', 'heading'), ['prompt' => '--Select--']) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'canonical_name')->textInput(['maxlength' => true, 'readonly' => true]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'meta_description')->textarea(['rows' => 6]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'meta_keyword')->textarea(['rows' => 6]) ?>

                </div><div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
                        <?=
                        $form->field($model, 'description', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                            'options' => ['rows' => 2],
                            'preset' => 'custom',
                        ])
                        ?>

                </div><div class='col-md-12 col-sm-12 col-xs-12 left_padd'>

                        <?=
                        $form->field($model, 'technologies_used', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                            'options' => ['rows' => 2],
                            'preset' => 'custom',
                        ])
                        ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'project_type')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>

                        <?= $form->field($model, 'image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 730x1300 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
                        <?php
                        if ($model->isNewRecord)
                                echo "";
                        else {
                                if (!empty($model->image)) {
                                        ?>

                                        <img src="<?= Yii::$app->homeUrl ?>../uploads/portfolio/<?= $model->id ?>/small.<?= $model->image; ?>" width="125" height="100"/>
                                        <?php
                                }
                        }
                        ?>
                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>

                        <?= $form->field($model, 'small_image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Small Image [ File Size :( 750x750 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
                        <?php
                        if ($model->isNewRecord)
                                echo "";
                        else {
                                if (!empty($model->small_image)) {
                                        ?>

                                        <img src="<?= Yii::$app->homeUrl ?>../uploads/portfolio/<?= $model->id ?>/index//small.<?= $model->small_image; ?>" width="125" height="100"/>
                                        <?php
                                }
                        }
                        ?>
                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'alt_tag')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'small_image_alt')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'status')->dropDownList(['1' => 'Enabled', '0' => 'Disabled']) ?>

                </div>     </div>
        <div class='col-md-4 col-sm-6 col-xs-12' >
                <div class="form-group" >
                        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'style' => 'margin-top: 18px;']) ?>
                </div>
        </div>

        <?php ActiveForm::end(); ?>

</div>
<script>
        $(document).ready(function () {
                $('#portfolio-name').keyup(function () {
                        var name = slug($(this).val());
                        $('#portfolio-canonical_name').val(slug($(this).val()));
                });

                $('#port_service').hide();
                $('#portfolio-page').change(function () {
                        if ($(this).val() == '1') {
                                $('#port_type').show();
                                $('#port_service').hide();
                        } else {
                                $('#port_service').show();
                                $('#port_type').hide();
                        }
                });

                var page = $('#portfolio-page').val();
                if (page == '1') {
                        $('#port_type').show();
                        $('#port_service').hide();
                } else {
                        $('#port_service').show();
                        $('#port_type').hide();
                }

        });
        var slug = function (str) {
                var $slug = '';
                var trimmed = $.trim(str);
                $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
                        replace(/-+/g, '-').
                        replace(/^-|-$/g, '');
                return $slug.toLowerCase();
        }
</script>