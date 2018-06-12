<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
if (isset($meta_title) && $meta_title != '')
        $this->title = $meta_title;
else
        $this->title = 'Epitome';
?>
<!--header-->
<section class="in-banner"><!--in-banner-->
        <div class="container">
                <div class="banner-cont">
                        <h2><span>c</span>ontact <span>u</span>s</h2>
                </div>
                <div class="main-breadcrumb"><a href="<?= Yii::$app->homeUrl ?>">Home</a><i>|</i><span>contact us</span> </div>
        </div>
</section>
<!--in-banner-->
<section class="in-top-contact"><!--in-top-contact-->
        <div class="container">
                <div class="top-cont-box"><h2>CONTACT US AND WE’LL <span>GIVE YOU A SOLUTION!</span></h2>
                        <p>We appreciate your business and guarantee a response within<b> 24 Business hours </b>which would<br> include our Packages and Pricing.</p>
                </div>
                <div class="row">
                        <div class="col-sm-4 in-border">
                                <div class="contact-box">
                                        <div class="icon"></div>
                                        <small>Skype</small>
                                        <h3><?= $contact_details->skype ?></h3>
                                </div>
                        </div>
                        <div class="col-sm-4 in-border">
                                <div class="contact-box">
                                        <div class="icon icon2"></div>
                                        <small>Email</small>
                                        <h3><?= $contact_details->email ?></h3>
                                </div>
                        </div>
                        <div class="col-sm-4 in-border in-border-right">
                                <div class="contact-box">
                                        <div class="icon icon3"></div>
                                        <small>Phone</small>
                                        <h3><?= $contact_details->phone1 ?></h3>
                                </div>
                        </div>
                </div>
                <div class="row"><div class="contact-business-hours"><h2><b>Business hours:</b> <strong>Saturday</strong> – Thursday 9am to 5pm  <strong>Friday</strong> – <span>Closed</span> </h2></div></div>
        </div>
</section><!--in-top-contact-->
<section class="in-contact-address"><!--in-contact-address-->
        <div class="container">
                <div class="main-head2">
                        <h2><span>C</span>ontact <span>a</span>ddress </h2>
                        <small>contact address</small></div>
                <div class="address-box-main">
                        <div class="row">
                                <div class="col-lg-6">
                                        <div class="address-map-box">
                                                <div class="map">
                                                        <div class="address">
                                                                <div class="box"><h2 class="head">office address</h2>
                                                                        <span><?= $contact_details->address ?></span>
                                                                </div>
                                                        </div>
                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462565.1976651163!2d54.947543187487454!3d25.075085288471904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai+-+United+Arab+Emirates!5e0!3m2!1sen!2sin!4v1517219850339" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-lg-6">
                                        <div class="address-map-box">
                                                <div class="map">
                                                        <div class="address">
                                                                <div class="box"><h2 class="head">office address</h2>
                                                                        <span><?= $contact_details->address_1 ?></span>
                                                                </div>
                                                        </div>
                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462565.1976651163!2d54.947543187487454!3d25.075085288471904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai+-+United+Arab+Emirates!5e0!3m2!1sen!2sin!4v1517219850339" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                                                </div>
                                        </div>
                                </div>

                        </div>
                </div>
        </div>
</section><!--in-contact-address-->
<section class="in-get-in-touch">
        <div class="container">
                <div class="main-head1">
                        <h2><span>G</span>ET <span>I</span>N <span>T</span>ouCH </h2>
                        <small>Our Enquiry</small></div>
                <p class="text">Fill in the form below, and we'll get back to you within 24 hours.</p>
                <?= common\widgets\Alert::widget() ?>
                    <?php $form = ActiveForm::begin(['options' => ['class' => 'in-main-form', 'id' => 'contact-form-submit']]); ?>
                <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                        <?= $form->field($model, 'name')->textInput(['placeholder' => 'Name'])->label(FALSE) ?>
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                        <?= $form->field($model, 'website_url')->textInput(['placeholder' => 'Website URL'])->label(FALSE) ?>
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                        <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email'])->label(FALSE) ?>
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                        <?= $form->field($model, 'phone')->textInput(['placeholder' => 'Phone No'])->label(FALSE) ?>
                                </div>
                        </div>
                        <div class="col-md-12">
                                <div class="form-group">
                                        <?= $form->field($model, 'message')->textArea(['placeholder' => 'Message'])->label(FALSE) ?>
                                </div>
                        </div>
                        <div class="col-md-12">
                                <div class="g-recaptcha" id="g-recaptcha"  data-sitekey="6LfB910UAAAAAGGgNs2Bu0Ay1qPAaYG_tjOYslCI"></div>
                        </div>
                        <div class="col-md-12">
                                <div class="form-group">
                                        <center><input name="" type="submit" value="Send Request!" class="submit"></center>
                                </div>
                        </div>


                </div>
                <?php ActiveForm::end(); ?>
        </div>
</section>

<script>
    $(document).ready(function () {
        $('#contact-form-submit').on('submit', function (e) {
            var res = grecaptcha.getResponse();
            if (res == "" || res == undefined || res.length == 0)
            {
                e.preventDefault();
                if ($("#g-recaptcha").next(".validation").length == 0) // only add if not added
                {
                    $("#g-recaptcha").after("<div class='validation' style='color:#a94442;font-size: 13px;margin-bottom: 14px;'>Please verify that you are not a robot</div>");
                }
            }
        });
    });
</script>