<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AboutSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'small_content') ?>

    <?= $form->field($model, 'detailed_content') ?>

    <?= $form->field($model, 'customer_support') ?>

    <?= $form->field($model, 'customer_support_detail') ?>

    <?php // echo $form->field($model, 'customer_support_no') ?>

    <?php // echo $form->field($model, 'caption_1') ?>

    <?php // echo $form->field($model, 'caption_1_detail') ?>

    <?php // echo $form->field($model, 'caption_2') ?>

    <?php // echo $form->field($model, 'caption_2_detail') ?>

    <?php // echo $form->field($model, 'caption_3') ?>

    <?php // echo $form->field($model, 'caption_3_detail') ?>

    <?php // echo $form->field($model, 'caption_4') ?>

    <?php // echo $form->field($model, 'caption_4_detail') ?>

    <?php // echo $form->field($model, 'caption_5') ?>

    <?php // echo $form->field($model, 'caption_5_detail') ?>

    <?php // echo $form->field($model, 'caption_6') ?>

    <?php // echo $form->field($model, 'caption_6_detail') ?>

    <?php // echo $form->field($model, 'about_image') ?>

    <?php // echo $form->field($model, 'about_image_alt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
