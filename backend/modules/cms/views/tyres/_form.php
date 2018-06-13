<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\Brands;
/* @var $this yii\web\View */
/* @var $model common\models\Tyres */
/* @var $form yii\widgets\ActiveForm */
$brands=Brands::find()->where(['status'=>1,'type'=>1])->all();
?>

<div class="tyres-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'brand')->dropdownlist(ArrayHelper::map($brands,'id','title'),['prompt'=>'--Select--']) ?>

</div><div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'type')->dropDownList([''=>'--Select--','1' => 'SportsCar', '0' => 'Luxury Saloon']) ?>

</div><div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'spec_1')->textInput(['maxlength' => true]) ?>

</div><div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'spec_1_value')->textInput(['maxlength' => true]) ?>

</div><div class='col-md6 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'spec_2')->textInput(['maxlength' => true]) ?>

</div><div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'spec_2_value')->textInput(['maxlength' => true]) ?>

</div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>   <?= $form->field($model, 'image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 400x362 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
                        <?php
                        if ($model->isNewRecord)
                                echo "";
                        else {
                                if (!empty($model->image)) {
                                        ?>

                                        <img src="<?= Yii::$app->homeUrl ?>../uploads/tyres/<?= $model->id ?>/small.<?= $model->image; ?>" width="125" height="100"/>
                                        <?php
                                }
                        }
                        ?>

</div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'alt_tag')->textInput(['maxlength' => true]) ?>

</div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>     <?= $form->field($model, 'status')->dropDownList(['1' => 'Enabled', '0' => 'Disabled']) ?>

</div>   </div>

    <div class="row"> 
        <div class='col-md-4 col-sm-6 col-xs-12' >
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
