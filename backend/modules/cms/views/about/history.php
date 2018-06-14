<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\About */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-form form-inline">
        <?php $form = ActiveForm::begin(); ?>
        <div class="row">

                <div id = "p_attach">
                        <input type = "hidden" id = "delete_port_vals" name = "delete_port_vals" value = "">


                        <span>
                                <div class = 'col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <div class = "form-group field-staffperviousemployer-hospital_address">
                                                <label class = "control-label">Year</label>
                                                <input type="text"  class="form-control" name="create[yaer][]" maxlength="100">
                                        </div>
                                </div>

                                <div class = 'col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <div class = "form-group field-staffperviousemployer-hospital_address">
                                                <label class = "control-label">Event</label>
                                                <input type="text"  class="form-control" name="create[event][]" maxlength="100">
                                        </div>
                                </div>

                                <div class = 'col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <div class = "form-group field-staffperviousemployer-hospital_address">
                                                <label class = "control-label">Title</label>
                                                <input type="text"  class="form-control" name="create[title][]" maxlength="100">
                                        </div>
                                </div>

                                <div class = 'col-md-12 col-sm-6 col-xs-12 left_padd'>
                                        <div class = "form-group field-staffperviousemployer-hospital_address">
                                                <label class = "control-label">Title</label>
                                                <textarea name="create[content][]" class="form-control" id=""></textarea>
                                        </div>
                                </div>

                                <div class = 'col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <div class = "form-group field-staffperviousemployer-hospital_address">
                                                <label class = "control-label">Image</label>
                                                <input type = "file" name = "creates[image][]">
                                        </div>
                                </div>

                                <div class = 'col-md-4 col-sm-6 col-xs-12 left_padd'>
                                        <div class = "form-group field-staffperviousemployer-hospital_address">
                                                <label class = "control-label">Image Alt Tag</label>
                                                <input type="text"  class="form-control" name="create[image_alt_tag][]" maxlength="100">
                                        </div>
                                </div>

                                <div style="clear:both"></div>
                        </span>
                        <br/>
                </div>



        </div>

        <div class="row">
                <div class="col-md-6">
                        <a id="addAttach" class="btn btn-blue btn-icon btn-icon-standalone addAttach" type="1"><i class="fa-plus"></i><span> Add More</span></a>
                </div>
        </div>

        <?php ActiveForm::end(); ?>

</div>


<style>
        form .form-group textarea{
                height:auto !important;
        }
</style>