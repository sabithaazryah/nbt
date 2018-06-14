<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\Services */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="services-form form-inline">

        <?php $form = ActiveForm::begin(); ?>
        <div class="row">
                <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                </div><div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'status')->dropDownList(['1' => 'Enabled', '0' => 'Disabled']) ?>

                </div> <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>    <?=
                        $form->field($model, 'content', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                            'options' => ['rows' => 2],
                            'preset' => 'custom',
                        ])
                        ?>

                </div><div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'gallery_iamge[]')->fileInput(['multiple' => true]) ?>

                </div>  </div>


        <?php if (!$model->isNewRecord) { ?>
                                                                                                                                                                                                                                                        <!--<a href=''><img src="<?= yii::$app->homeUrl ?>/../../uploads/product/1/dasda_0.jpg" width="100" alt="Delete"></a>-->
                <div class="row">
                        <?php
                        $path = Yii::getAlias('@paths') . '/services/' . $model->id . '/gallery_thumb';
                        if (count(glob("{$path}/*")) > 0) {
                                echo "<hr class='appoint_history'/> <h4 class='sub-heading'>Uploaded Files</h4>";

                                $k = 0;
                                foreach (glob("{$path}/*") as $file) {
                                        $k++;
                                        $arry = explode('/', $file);
                                        $img_nmee = end($arry);

                                        $img_nmees = explode('.', $img_nmee);
                                        if ($img_nmees['1'] != '') {
                                                ?>

                                                <div class = "col-md-1 img-box" id="<?= $k; ?>">
                                                        <div class="news-img">
                                                                <img src="<?= Yii::$app->homeUrl . '../uploads/services/' . $model->id . '/gallery_thumb/' . end($arry) ?>" >
                                                                <a  title="Delete" class="img-remove news_image" id="<?= $model->id . "@" . $img_nmee . '@' . $k; ?>" style="cursor:pointer"><i class="fa fa-remove" style="position: absolute;top: 3px;font-size: 17px;
                                                                                                                                                                                                color: red;"></i></a>
                                                        </div> </div>


                                                <?php
                                        }
                                }
                        }
                        ?>
                </div>
                <?php
        }
        ?>

        <div class="row">
                <div class='col-md-4 col-sm-6 col-xs-12' >
                        <div class="form-group">
                                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'style' => 'margin-top:15px']) ?>
                        </div>
                </div>
        </div>

        <?php ActiveForm::end(); ?>

</div>


<script>
        $(document).ready(function () {
                $('.news_image').click(function () {
                        var id = this.id;
                        $.ajax({
                                url: 'ajax_imgdelete',
                                type: "post",
                                data: {image: id},
                                success: function (data) {
                                        var $data = JSON.parse(data);
                                        if ($data.msg == "success") {
                                                $('#' + $data.id).hide();
                                        } else {
                                                alert($data.title);
                                        }
                                }, error: function () {
                                        alert('Image Cannot be delete');
                                }
                        });
                });




        });
</script>