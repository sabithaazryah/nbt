<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\OurProductsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="our-products-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title_1') ?>

    <?= $form->field($model, 'image_1') ?>

    <?= $form->field($model, 'description_1') ?>

    <?= $form->field($model, 'title_2') ?>

    <?php // echo $form->field($model, 'image_2') ?>

    <?php // echo $form->field($model, 'description_2') ?>

    <?php // echo $form->field($model, 'title_3') ?>

    <?php // echo $form->field($model, 'image_3') ?>

    <?php // echo $form->field($model, 'description_3') ?>

    <?php // echo $form->field($model, 'CB') ?>

    <?php // echo $form->field($model, 'UB') ?>

    <?php // echo $form->field($model, 'DOC') ?>

    <?php // echo $form->field($model, 'DOU') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
