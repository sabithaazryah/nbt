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

    <?= $form->field($model, 'image') ?>

    <?= $form->field($model, 'content') ?>

    <?= $form->field($model, 'work_cycle') ?>

    <?= $form->field($model, 'work_cycle_1') ?>

    <?php // echo $form->field($model, 'work_cycle_1_content') ?>

    <?php // echo $form->field($model, 'work_cycle_2') ?>

    <?php // echo $form->field($model, 'work_cycle_2_content') ?>

    <?php // echo $form->field($model, 'work_cycle_3') ?>

    <?php // echo $form->field($model, 'work_cycle_3_content') ?>

    <?php // echo $form->field($model, 'work_cycle_4') ?>

    <?php // echo $form->field($model, 'work_cycle_4_content') ?>

    <?php // echo $form->field($model, 'work_cycle_5') ?>

    <?php // echo $form->field($model, 'work_cycle_5_content') ?>

    <?php // echo $form->field($model, 'work_cycle_6') ?>

    <?php // echo $form->field($model, 'work_cycle_6_content') ?>

    <?php // echo $form->field($model, 'status') ?>

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
