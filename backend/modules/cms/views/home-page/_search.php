<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\HomePageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="home-page-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'what_we_do') ?>

    <?= $form->field($model, 'service_1') ?>

    <?= $form->field($model, 'service_2') ?>

    <?= $form->field($model, 'service_3') ?>

    <?php // echo $form->field($model, 'service_4') ?>

    <?php // echo $form->field($model, 'service_5') ?>

    <?php // echo $form->field($model, 'service_6') ?>

    <?php // echo $form->field($model, 'who_we_are') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
