<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

if (isset($meta_title) && $meta_title != '')
        $this->title = $meta_title;
else
        $this->title = 'New Bharath Pitstop';
?>
<!--Start breadcrumb area-->
<section class="breadcrumb-area">
        <div class="container">
                <div class="row">
                        <div class="col-md-12">
                                <div class="breadcrumbs text-center">
                                        <h1>Products</h1>
                                        <h4>Keep Your Vehicle Clean and Smart Like You</h4>
                                </div>
                        </div>
                </div>
        </div>
</section>
<!--End breadcrumb area-->
<!--Start breadcrumb bottom area-->
<section class="breadcrumb-bottom-area">
        <div class="container">
                <div class="row">
                        <div class="col-md-6 col-sm-5">
                                <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><i class="fa fa-angle-right"></i></li>
                                        <li>Products</li>
                                </ul>
                        </div>
                        <div class="col-md-6 col-sm-7">
                                <p>We are here to provide 100% services to our customers</p>
                        </div>
                </div>
        </div>
</section>
<!--End breadcrumb bottom area-->
<!--Start services single area-->
<section class="services-single-area">
        <div class="container">
                <div class="row">
                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 pull-right">
                                <div class="in-product-section">
                                        <div class="product-details-section">
                                                <h2 class="head-text-detail"><i class="icon"></i><span>S</span>ports <span>c</span>ar</h2>
                                                <div class="row">
                                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                                                <div class="details-box">
                                                                        <div class="img-box"><img src="<?= Yii::$app->homeUrl ?>img/best-service/p1.jpg" class="img-responsive"></div>
                                                                        <div class="link"><a href="appointment.html">enquiry Now</a></div>

                                                                        <div class="cont-box">
                                                                                <h3>Specification</h3>
                                                                                <p>Size:  165/60R14 </p>
                                                                                <p>Type:  Good Performance</p>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                                                <div class="details-box">
                                                                        <div class="img-box"><img src="<?= Yii::$app->homeUrl ?>img/best-service/p1.jpg" class="img-responsive"></div>
                                                                        <div class="link"><a href="appointment.html">enquiry Now</a></div>

                                                                        <div class="cont-box">
                                                                                <h3>Specification</h3>
                                                                                <p>Size:  165/60R14 </p>
                                                                                <p>Type:  Good Performance</p>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                                                <div class="details-box">
                                                                        <div class="img-box"><img src="<?= Yii::$app->homeUrl ?>img/best-service/p1.jpg" class="img-responsive"></div>
                                                                        <div class="link"><a href="appointment.html">enquiry Now</a></div>

                                                                        <div class="cont-box">
                                                                                <h3>Specification</h3>
                                                                                <p>Size:  165/60R14 </p>
                                                                                <p>Type:  Good Performance</p>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="product-details-section">
                                                <h2 class="head-text-detail"><i class="icon"></i><span>L</span>uxury <span>S</span>aloon</h2>
                                                <div class="row">
                                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                                                <div class="details-box">
                                                                        <div class="img-box"><img src="<?= Yii::$app->homeUrl ?>img/best-service/p1.jpg" class="img-responsive"></div>
                                                                        <div class="link"><a href="appointment.html">enquiry Now</a></div>

                                                                        <div class="cont-box">
                                                                                <h3>Specification</h3>
                                                                                <p>Size:  165/60R14 </p>
                                                                                <p>Type:  Good Performance</p>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                                                <div class="details-box">
                                                                        <div class="img-box"><img src="<?= Yii::$app->homeUrl ?>img/best-service/p1.jpg" class="img-responsive"></div>
                                                                        <div class="link"><a href="appointment.html">enquiry Now</a></div>

                                                                        <div class="cont-box">
                                                                                <h3>Specification</h3>
                                                                                <p>Size:  165/60R14 </p>
                                                                                <p>Type:  Good Performance</p>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                                                <div class="details-box">
                                                                        <div class="img-box"><img src="<?= Yii::$app->homeUrl ?>img/best-service/p1.jpg" class="img-responsive"></div>
                                                                        <div class="link"><a href="appointment.html">enquiry Now</a></div>

                                                                        <div class="cont-box">
                                                                                <h3>Specification</h3>
                                                                                <p>Size:  165/60R14 </p>
                                                                                <p>Type:  Good Performance</p>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>


                                </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 pull-left">
                                <div class="single-services-sidebar">
                                        <!--Start Single item-->
                                        <div class="single-item">
                                                <ul class="services-list">
                                                        <li class="active"><a href="tyres.html">TYRES<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                                        <li><a href="alloy-wheels.html">ALLOY WHEELS<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                                        <li><a href="batteries.html">BATTERIES<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                                </ul>
                                        </div>
                                        <!--End Single item-->
                                        <!--Start Single item-->
                                        <div class="single-item">
                                                <div class="sec-title text-left">
                                                        <h2>Our Brochures</h2>
                                                        <span class="decor"></span> </div>
                                                <div class="brochures-content">
                                                        <div class="img-holder"> <img src="<?= Yii::$app->homeUrl ?>img/resources/brochures.jpg" alt=""> </div>
                                                        <ul class="brochures-list">
                                                                <li><a href="#"><span class="flaticon-interface"></span>Service Brochure.PDF</a></li>
                                                                <li><a href="#"><span class="flaticon-interface"></span>air conditioner.PDF</a></li>
                                                        </ul>
                                                </div>
                                        </div>
                                        <!--End Single item-->
                                        <!--Start Single item-->

                                        <!--End Single item-->
                                </div>
                        </div>
                </div>
        </div>
</section>
<!--End services single area-->
<!--Start free appoinment area-->
<section class="free-appoinment-area">
        <div class="container">
                <form class="free-appoinment-form" action="#">
                        <div class="row">
                                <div class="col-md-6">
                                        <div class="sec-title text-left">
                                                <h1>Make Free Appoinment</h1>
                                                <span class="decor"></span> </div>
                                        <div class="row">
                                                <div class="col-md-12">
                                                        <div class="input-field">
                                                                <input type="text" name="name" placeholder="Your Name*">
                                                                <div class="icon-holder"> <span class="flaticon-people"></span> </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-12">
                                                        <div class="input-field">
                                                                <input type="text" name="mobile-number" placeholder="Mobile Num">
                                                                <div class="icon-holder"> <span class="flaticon-telephone"></span> </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-12">
                                                        <div class="input-field">
                                                                <input type="text" name="email" placeholder="Email Address*">
                                                                <div class="icon-holder"> <span class="flaticon-note"></span> </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-12">
                                                        <div class="input-field">
                                                                <textarea name="comment" placeholder="Comments..."></textarea>
                                                                <div class="icon-holder comment"> <span class="flaticon-social-1"></span> </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <p class="select-category">Select Category:</p>
                                        <div class="category-item">
                                                <input type="radio" id="indv" name="indvlcorpt" value="Individual">
                                                <label for="indv">Individual</label>
                                        </div>
                                        <div class="category-item">
                                                <input type="radio" id="corpt" name="indvlcorpt" value="Corporate">
                                                <label for="corpt">Corporate</label>
                                        </div>
                                        <div class="row">
                                                <div class="col-md-12">
                                                        <div class="input-field">
                                                                <input type="text" name="reg-number" placeholder="Vehicle Registration Num*">
                                                                <div class="icon-holder"> <span class="flaticon-sign"></span> </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-12">
                                                        <div class="row">
                                                                <div class="col-md-6">
                                                                        <div class="input-field">
                                                                                <input type="text" name="reg-number" placeholder="Vehicle Registration Num*">
                                                                                <div class="icon-holder"> <span class="flaticon-sign"></span> </div>
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                        <div class="input-field">
                                                                                <input type="text" name="reg-number" placeholder="Vehicle Registration Num*">
                                                                                <div class="icon-holder"> <span class="flaticon-sign"></span> </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-12">
                                                        <div class="input-field">
                                                                <input type="text" name="reg-number" placeholder="Vehicle Registration Num*">
                                                                <div class="icon-holder"> <span class="flaticon-sign"></span> </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-12">
                                                        <div class="input-field">
                                                                <input type="text" name="date" placeholder="Select Date">
                                                                <div class="icon-holder"> <span class="flaticon-dates"></span> </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-12">
                                                        <button class="aut-cr-btn" type="button">Book Now</button>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </form>
        </div>
</section>
<!--End free appoinment area-->