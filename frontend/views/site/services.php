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
                                        <h1>Services</h1>
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
                                        <li>Services</li>
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
                                <div class="services-single-content">
                                        <div class="sec-title text-left">
                                                <h1>Wheel Alignment</h1>
                                                <span class="decor"></span>
                                        </div>
                                        <div id="services-single-carousel" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                        <li data-target="#services-single-carousel" data-slide-to="0" class="active"></li>
                                                        <li data-target="#services-single-carousel" data-slide-to="1"></li>
                                                        <li data-target="#services-single-carousel" data-slide-to="2"></li>
                                                </ol>
                                                <div class="carousel-inner" role="listbox">
                                                        <div class="item active">
                                                                <div class="single-item">
                                                                        <div class="img-holder">
                                                                                <img src="<?= Yii::$app->homeUrl ?>img/services-single-v1/1.jpg" alt="Awesome Image">
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <div class="item">
                                                                <div class="single-item">
                                                                        <div class="img-holder">
                                                                                <img src="<?= Yii::$app->homeUrl ?>img/services-single-v1/1.jpg" alt="Awesome Image">
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <div class="item">
                                                                <div class="single-item">
                                                                        <div class="img-holder">
                                                                                <img src="<?= Yii::$app->homeUrl ?>img/services-single-v1/1.jpg" alt="Awesome Image">
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="content">

                                                <p class="top-text">Pleasure and praising pain was born and I will give you a complete account of the systems, and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</p>
                                                <p>Complete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful anyone who loves or pursues.</p>

                                        </div>



                                </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 pull-left">
                                <div class="single-services-sidebar">
                                        <!--Start Single item-->
                                        <div class="single-item">
                                                <ul class="services-list">
                                                        <li class="active"><a href="#">Wheel Alignment<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                                        <li><a href="#">Wheel Balancing<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                                        <li><a href="#">Tyre Fitment<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                                        <li><a href="#">Wheel Care<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                                        <li><a href="#">Nitrogen Air<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                                        <li><a href="#">Air Conditioning<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                                        <li><a href="#">Brakes<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                                        <li><a href="#">Window Tinting<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                                        <li><a href="#">Car Detailing<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                                </ul>
                                        </div>
                                        <!--End Single item-->
                                        <!--Start Single item-->
                                        <div class="single-item">
                                                <div class="sec-title text-left">
                                                        <h2>Our Brochures</h2>
                                                        <span class="decor"></span>
                                                </div>
                                                <div class="brochures-content">
                                                        <div class="img-holder">
                                                                <img src="<?= Yii::$app->homeUrl ?>img/resources/brochures.jpg" alt="">
                                                        </div>
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