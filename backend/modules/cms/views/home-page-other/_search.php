<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\HomePageOtherSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="home-page-other-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'banner_label') ?>

    <?= $form->field($model, 'welcome_note') ?>

    <?= $form->field($model, 'small_content') ?>

    <?= $form->field($model, 'detail_content') ?>

    <?php // echo $form->field($model, 'caption_1') ?>

    <?php // echo $form->field($model, 'caption_1_detail') ?>

    <?php // echo $form->field($model, 'caption_2') ?>

    <?php // echo $form->field($model, 'caption_2_detail') ?>

    <?php // echo $form->field($model, 'caption_3') ?>

    <?php // echo $form->field($model, 'caption_3_detail') ?>

    <?php // echo $form->field($model, 'footer_content') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
