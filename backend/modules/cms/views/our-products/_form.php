<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\OurProducts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="our-products-form form-inline">

        <?php $form = ActiveForm::begin(); ?>
        <div class="row">
                <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'title_1')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'description_1')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'image_1', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 370x380 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
                        <?php
                        if ($model->isNewRecord)
                                echo "";
                        else {
                                if (!empty($model->image_1)) {
                                        ?>
                                        <img src="<?= Yii::$app->homeUrl ?>../uploads/our-products/<?= $model->id ?>/1/small.<?= $model->image_1; ?>" width="125" height="100"/>
                                        <?php
                                }
                        }
                        ?>

                </div>
                <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'other_image_1', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 370x380 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
                        <?php
                        if ($model->isNewRecord)
                                echo "";
                        else {
                                if (!empty($model->other_image_1)) {
                                        ?>
                                        <img src="<?= Yii::$app->homeUrl ?>../uploads/our-products/<?= $model->id ?>/1/hover/small.<?= $model->image_1; ?>" width="125" height="100"/>
                                        <?php
                                }
                        }
                        ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'image_alt_1')->textInput(['maxlength' => true]) ?>

                </div>
        </div>
        <div class="row">
                <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'title_2')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'description_2')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'image_2', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 370x380 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
                        <?php
                        if ($model->isNewRecord)
                                echo "";
                        else {
                                if (!empty($model->image_2)) {
                                        ?>
                                        <img src="<?= Yii::$app->homeUrl ?>../uploads/our-products/<?= $model->id ?>/2/small.<?= $model->image_2; ?>" width="125" height="100"/>
                                        <?php
                                }
                        }
                        ?>

                </div>
                <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'other_image_2', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 370x380 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
                        <?php
                        if ($model->isNewRecord)
                                echo "";
                        else {
                                if (!empty($model->other_image_2)) {
                                        ?>
                                        <img src="<?= Yii::$app->homeUrl ?>../uploads/our-products/<?= $model->id ?>/2/hover/small.<?= $model->other_image_2; ?>" width="125" height="100"/>
                                        <?php
                                }
                        }
                        ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'image_alt_2')->textInput(['maxlength' => true]) ?>

                </div>
        </div>
        <div class="row">
                <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'title_3')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'description_3')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'image_3', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 370x380 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
                        <?php
                        if ($model->isNewRecord)
                                echo "";
                        else {
                                if (!empty($model->image_3)) {
                                        ?>
                                        <img src="<?= Yii::$app->homeUrl ?>../uploads/our-products/<?= $model->id ?>/3/small.<?= $model->image_3; ?>" width="125" height="100"/>
                                        <?php
                                }
                        }
                        ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'other_image_3', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 370x380 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
                        <?php
                        if ($model->isNewRecord)
                                echo "";
                        else {
                                if (!empty($model->other_image_3)) {
                                        ?>
                                        <img src="<?= Yii::$app->homeUrl ?>../uploads/our-products/<?= $model->id ?>/3/hover/small.<?= $model->other_image_3; ?>" width="125" height="100"/>
                                        <?php
                                }
                        }
                        ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'image_alt_3')->textInput(['maxlength' => true]) ?>

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
