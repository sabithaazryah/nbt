<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<!--Start free appoinment area-->
<section class="free-appoinment-area">
        <div class="container">
                <!--<form class="free-appoinment-form" action="#">-->
                <form class="free-appoinment-form" action="<?= Yii::$app->homeUrl ?>site/appoint" method="post">
                        <?= common\widgets\Alert::widget() ?>
                        <div class="sec-title text-left">
                                <h1>Make Free Appoinment</h1>
                                <span class="decor"></span> </div>
                        <div class="row">

                                <div class="col-md-6">

                                        <div class="row">
                                                <div class="col-md-12">
                                                        <div class="input-field">
                                                                <input type="text" name="name" placeholder="Your Name*" required="">
                                                                <div class="icon-holder"> <span class="flaticon-people"></span> </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-12">
                                                        <div class="input-field">
                                                                <input type="text" name="mobile_number" placeholder="Mobile Num" required="">
                                                                <div class="icon-holder"> <span class="flaticon-telephone"></span> </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-12">
                                                        <div class="input-field">
                                                                <input type="text" name="vehicle_manufacturer" placeholder="Vehicle Manufacturer">
                                                                <div class="icon-holder"> <span class="flaticon-sign"></span> </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-12">
                                                        <div class="input-field">
                                                                <input type="date" name="date" placeholder="Select Date">
                                                                <div class="icon-holder"> <span class="flaticon-dates"></span> </div>
                                                        </div>
                                                </div>

                                        </div>
                                </div>
                                <div class="col-md-6">

                                        <div class="row">
                                                <div class="col-md-12">
                                                        <div class="input-field">
                                                                <input type="email" name="email" placeholder="Email Address*" required="">
                                                                <div class="icon-holder"> <span class="flaticon-note"></span> </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-12">
                                                        <p class="select-category">Select Category:</p>
                                                        <div class="category-item">
                                                                <input type="radio" id="indv" name="indvlcorpt"  value="1">
                                                                <label for="indv">Individual</label>
                                                        </div>
                                                        <div class="category-item">
                                                                <input type="radio" id="corpt" name="indvlcorpt"  value="2">
                                                                <label for="corpt">Corporate</label>
                                                        </div>
                                                </div>



                                                <div class="col-md-12">
                                                        <div class="input-field">
                                                                <textarea name="comment" placeholder="Comments..."></textarea>
                                                                <div class="icon-holder comment"> <span class="flaticon-social-1"></span> </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-12">
                                                        <input name="" type="submit" value="Book Now" class="aut-cr-btn submit-btn">
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <!--</form>-->
                </form>
        </div>
</section>
<!--End free appoinment area-->