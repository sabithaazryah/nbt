<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AlloyWheelsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alloy-wheels-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'brand') ?>

    <?= $form->field($model, 'spec_1') ?>

    <?= $form->field($model, 'spec_1_value') ?>

    <?= $form->field($model, 'spec_2') ?>

    <?php // echo $form->field($model, 'spec_2_value') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'alt_tag') ?>

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
